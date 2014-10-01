<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } /*

-------------------------------------------
------ About the AppAggregate Plugin ------
-------------------------------------------

Aggregation will pull data from other article sites. To do this, we need to track which sites to connect to, when the last pull time was, etc.

Every few minutes, an aggregation check should be made, pulling from the next site on the list. This will keep the article data fresh.

*/

abstract class AppAggregate {
	
	
/****** Plugin Variables ******/
	public static $duration = 1;		// <int> The duration of time to allow to pass between aggregation checks.
	
	
/****** Connect a particular site to be aggregated ******/
	public static function connectSite
	(
		$siteHandle				// <str> The handle of the site to include in our aggregation feed.
	)							// RETURNS <bool> TRUE if the site was added, FALSE if not.
	
	// AppAggregate::connectSite($siteHandle);
	{
		return Database::query("REPLACE INTO `aggregate_sites` (site_handle) VALUES (?)", array($siteHandle));
	}
	
	
/****** Run an Aggregation check, and update if applicable ******/
	public static function update (
	)					// RETURNS <bool> TRUE if everything passed properly, FALSE if an error occurred.
	
	// AppAggregate::update($hashtag, [..$hashtag], [..$hashtag]);
	{
		// Prepare Hashtags to aggregate with
		$hashtagList = func_get_args();
		
		if(!$hashtagList)
		{
			return false;
		}
		
		// Get the last Aggregated Check Time
		$dateChecked = SiteVariable::load("aggregation", "last-check");
		
		if($dateChecked === false)
		{
			$dateChecked = 0;
		}
		
		// Make sure a check hasn't already been made too recently
		$timestamp = time();
		$nextMark = $dateChecked + self::$duration;
		
		if($timestamp < $nextMark)
		{
			return true;
		}
		
		// Check which site we should call from next
		if(!$aggSite = Database::selectOne("SELECT site_handle, date_checked FROM aggregate_sites ORDER BY date_checked DESC LIMIT 1", array()))
		{
			return false;
		}
		
		// Update the aggregate time check
		SiteVariable::save("aggregation", "last-check", $timestamp);
		
		// Make sure this site hasn't been called from too recently
		if($aggSite['date_checked'] > ($timestamp - (self::$duration * 5)))
		{
			return true;
		}
		
		// Prepare the Packet
		$packet = array(
			"aggregate_time"		=> $aggSite['date_checked']		// Timestamp of the last aggregate content retrieved.
		,	"hashtags"				=> $hashtagList					// The list of hashtags to pull.
		);
		
		// Run the Aggregation API
		if($aggregateContent = Connect::to($aggSite['site_handle'], "AggregateAPI", $packet))
		{
			foreach($aggregateContent as $agg)
			{
				// Add the aggregate content data
				self::create($agg['uni_id'], $agg['url'], $agg['url_slug'], $agg['title'], $agg['primary_hashtag'], $agg['description'], $agg['thumbnail'], $agg['status'], $agg['date_posted'], $agg['feed_id'], $agg['hashtags']);
			}
		}
		
		// Update the aggregation check time
		return Database::query("UPDATE aggregate_sites SET date_checked=? WHERE site_handle=? LIMIT 1", array($timestamp, $aggSite['site_handle']));
	}
	
	
/****** Pull the aggregate content and upload it to the current system ******/
	public static function create
	(
		$uniID			// <int> The UniID that authored this content.
	,	$url			// <str> The URL where this content is being hosted.
	,	$urlSlug		// <str> The URL slug where this content is being hosted.
	,	$title			// <str> The title of this content.
	,	$primaryHashtag	// <str> The primary hashtag assigned to this content.
	,	$description	// <str> The description / description for this content.
	,	$thumbnailURL	// <str> The URL for the image for this content.
	,	$status			// <int> The status of the content.
	,	$datePosted		// <int> The timestamp of when this content was posted.
	,	$feedID			// <int> The ID of the feed submission.
	,	$hashtags		// <int:str> The list of hashtags associated with the content entry.
	)					// RETURNS <bool> TRUE if the entry was created, FALSE if not.
	
	// AppAggregate::create($uniID, $url, $primeHashtag, $title, $description, $thumbnailURL, $datePosted);
	{
		Database::startTransaction();
		
		if($pass = Database::query("INSERT INTO `content_entries` (uni_id, url, url_slug, title, primary_hashtag, description, thumbnail, status, date_posted, feed_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array($uniID, $url, $urlSlug, $title, $primaryHashtag, $description, $thumbnailURL, $status, $datePosted, $feedID)))
		{
			$lastID = Database::$lastID;
			
			foreach($hashtags as $hashtag)
			{
				if(!$pass = Database::query("INSERT IGNORE INTO content_hashtags (content_id, hashtag, submitted) VALUES (?, ?, ?)", array($lastID, $hashtag, 1)))
				{
					break;
				}
				
				if(!$pass = Database::query("INSERT IGNORE INTO content_by_hashtag (hashtag, content_id) VALUES (?, ?)", array($hashtag, $lastID)))
				{
					break;
				}
			}
			
			if($pass)
			{
				$hashtagStr = implode(" ", $hashtags);
				
				$pass = Database::query("REPLACE INTO content_search (content_id, hashtags) VALUES (?, ?)", array($lastID, $hashtagStr));
			}
		}
		
		return Database::endTransaction($pass);
	}
	
}
