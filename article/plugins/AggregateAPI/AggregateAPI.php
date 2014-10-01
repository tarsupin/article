<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } /*

----------------------------
------ About this API ------
----------------------------

This API is used to pull data from article sites and deliver it to others.

	
------------------------------
------ Calling this API ------
------------------------------
	
	// Prepare the Packet
	$packet = array(
		"aggregate_time"		=> $aggTimestamp		// Timestamp of the last aggregate content retrieved.
	,	"hashtags"				=> array($hashtag, ...)	// List of hashtags. If one is found, pull the content entry.
	);
	
	// Run the Aggregation API
	Connect::to($articleSite, "AggregateAPI", $packet);
	
	
[ Possible Responses ]
	???

*/

class AggregateAPI extends API {
	
	
/****** API Variables ******/
	public $isPrivate = true;			// <bool> TRUE if this API is private (requires an API Key), FALSE if not.
	public $encryptType = "";			// <str> The encryption algorithm to use for response, or "" for no encryption.
	public $allowedSites = array();		// <int:str> the sites to allow the API to connect with. Default is all sites.
	public $microCredits = 20;			// <int> The cost in microcredits (1/10000 of a credit) to access this API.
	public $minClearance = 6;			// <int> The minimum clearance level required to use this API.
	
	
/****** Run the API ******/
	public function runAPI (
	)					// RETURNS <int:[str:mixed]> a list of aggregated content entries.
	
	// $this->runAPI()
	{
		// Make sure the appropriate variables were sent
		if(!isset($this->data['aggregate_time']))
		{
			return false;
		}
		
		// Prepare the packet to return
		$packet = array();
		
		// Get the list of content entries that haven't been pulled yet
		$aggList = Database::selectMultiple("SELECT * FROM content_entries WHERE date_posted > ? AND status >= ? ORDER BY date_posted LIMIT 20", array($this->data['aggregate_time'], Content::STATUS_OFFICIAL));
		
		// Cycle through the content entries that match the query and add them to the return packet
		foreach($aggList as $agg)
		{
			// Recognize Integers
			$agg['id'] = (int) $agg['id'];
			
			// Get list of hashtags for this entry
			$hashtagList = ModuleHashtags::get($agg['id']);
			
			// If the site is only pulling specific hashtags, test if any are found
			if($this->data['hashtags'])
			{
				$hashtagMatch = false;
				
				foreach($this->data['hashtags'] as $findHashtag)
				{
					if(in_array($findHashtag, $hashtagList))
					{
						$hashtagMatch = true;
					}
				}
				
				if(!$hashtagMatch)
				{
					continue;
				}
			}
			
			// Add the next content entry data
			$packet[] = array(
				"uni_id"			=> (int) $agg['uni_id']
			,	"url"				=> ($agg['url'] == "" ? SITE_URL: $agg['url'])
			,	"url_slug"			=> $agg['url_slug']
			,	"title"				=> $agg['title']
			,	"primary_hashtag"	=> $agg['primary_hashtag']
			,	"description"		=> $agg['description']
			,	"thumbnail"			=> $agg['thumbnail']
			,	"status"			=> (int) $agg['status']
			,	"date_posted"		=> (int) $agg['date_posted']
			,	"feed_id"			=> (int) $agg['feed_id']
			,	"hashtags"			=> $hashtagList
			);
		}
		
		// Return the packet
		return $packet;
	}
	
}
