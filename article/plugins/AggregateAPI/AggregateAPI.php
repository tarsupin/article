<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } /*

----------------------------
------ About this API ------
----------------------------

This API is used to pull data from article sites and deliver it to aggregate sites.

	
------------------------------
------ Calling this API ------
------------------------------
	
	// Prepare the Packet
	$packet = array(
		"aggregate_time"		=> $aggTimestamp		// Timestamp of the last aggregate content retrieved.
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
		$aggList = Database::selectMultiple("SELECT id, uni_id, url_slug, title, primary_hashtag, date_posted FROM content_entries WHERE date_posted > ? AND status >= ? ORDER BY date_posted LIMIT 20", array($this->data['aggregate_time'], Content::STATUS_OFFICIAL));
		
		// Cycle through the content entries that match the query and add them to the return packet
		foreach($aggList as $agg)
		{
			// Get critical information
			$coreData = Content::scanForCoreData((int) $agg['id']);
			
			// Add the next content entry data
			$packet[] = array(
				"uni_id"			=> (int) $agg['uni_id']
			,	"url"				=> SITE_URL . "/" . $agg['url_slug']
			,	"primary_hashtag"	=> $agg['primary_hashtag']
			,	"title"				=> $agg['title']
			,	"description"		=> $coreData['body']
			,	"thumbnail"			=> $coreData['thumbnail']
			,	"date_posted"		=> (int) $agg['date_posted']
			);
		}
		
		// Return the packet
		return $packet;
	}
	
}
