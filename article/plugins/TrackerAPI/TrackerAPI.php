<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } /*

----------------------------
------ About this API ------
----------------------------

This API is used to run the tracker system from other sites.

	
------------------------------
------ Calling this API ------
------------------------------
	
	// Prepare the Packet
	$packet = array(
		"uni_id"			=> $uniID		// The UniID of the person updating the tracker.
	,	"url_slug"			=> $urlSlug		// The URL slug of the entry to run tracking on.
	,	"type"				=> $trackType	// The type of tracking to run (boost, nooch, tip, etc)
	);
	
	// Run the API
	Connect::to($articleSite, "TrackerAPI", $packet);
	
	
[ Possible Responses ]
	???

*/

class TrackerAPI extends API {
	
	
/****** API Variables ******/
	public $isPrivate = true;			// <bool> TRUE if this API is private (requires an API Key), FALSE if not.
	public $encryptType = "";			// <str> The encryption algorithm to use for response, or "" for no encryption.
	public $allowedSites = array();		// <int:str> the sites to allow the API to connect with. Default is all sites.
	public $microCredits = 20;			// <int> The cost in microcredits (1/10000 of a credit) to access this API.
	public $minClearance = 6;			// <int> The minimum clearance level required to use this API.
	
	
/****** Run the API ******/
	public function runAPI (
	)					// RETURNS
	
	// $this->runAPI()
	{
		// Make sure the appropriate data is sent
		if(!isset($this->data['uni_id']) or !isset($this->data['url_slug']) or !isset($this->data['type']))
		{
			return array();
		}
		
		// Make sure you have an appropriate UniID sent
		$uniID = (int) $this->data['uni_id'];
		
		if(!$uniID)
		{
			return array();
		}
		
		// Get the content ID
		$contentID = (int) Database::selectValue("SELECT content_id FROM content_by_url WHERE url_slug=? LIMIT 1", array($this->data['url_slug']));
		
		// Make sure the content exists
		if($contentData = Database::selectOne("SELECT uni_id FROM content_entries WHERE id=? LIMIT 1", array($contentID)))
		{
			// Prepare Values
			$authorID = (int) $contentData['uni_id'];
			
			// Run the Content Track Handler
			$contentTrack = new ContentTrack($contentID, (int) $this->data['uni_id']);
			
			switch($this->data['type'])
			{
				case "boost":
					
					// Run the Boost Vote
					$vote = $contentTrack->voteUp((isset($this->data['voteType']) and $this->data['voteType'] == 1 ? true : false));
					
					// Pull the tracking data
					$trackData = Database::selectOne("SELECT * FROM content_tracking WHERE content_id=? LIMIT 1", array($contentID));
					
					// Return the current tracking values
					return array(
						"content_id" => $contentID
					,	"vote" => $vote
					,	"boosts" => $trackData['votes_up']
					,	"nooches" => $trackData['nooch']
					,	"tipNum" => round($trackData['tipped_amount'] * 10)
					);
				
				case "nooch":
					
					$success = false;
					$noochCount = 0;
					
					if($authorID != Me::$id)
					{
						// Check if the user has already triple nooched
						$noochCount = Database::selectValue("SELECT nooch FROM content_tracking_users WHERE uni_id=? AND content_id=? LIMIT 1", array(Me::$id, $contentID));
						
						if($noochCount !== false and $noochCount < 3)
						{
							if($success = Credits::chargeInstant(Me::$id, 0.15, "Assigned a Nooch"))
							{
								$contentTrack->nooch();
								$noochCount++;
							}
						}
					}
					
					return array(
						"content_id" => $contentID
					,	"nooch_count" => (int) $noochCount
					,	"nooch_success" => $success
					);
				
				case "tip":
					
					if(!isset($_POST['amount']))
					{
						return array();
					}
					
					// Prepare Values
					$_POST['amount'] = (float) $_POST['amount'];
					
					$pass = ($_POST['amount'] >= 0.1 ? true : false);
					
					// Process the UniJoule exchange
					if($pass)
					{
						$pass = Credits::exchangeInstant(Me::$id, (int) $authorID, $_POST['amount'], "Tipped by " . Me::$vals['display_name']);
					}
					
					// Track the tip
					if($pass and $success = $contentTrack->tip($_POST['amount']))
					{
						return array(
							"content_id" => (int) $contentID
						,	"tip_boost" => floor($_POST['amount'] * 10)
						);
					}
					
					return array();
			}
		}
		
		return array();
	}
	
}
