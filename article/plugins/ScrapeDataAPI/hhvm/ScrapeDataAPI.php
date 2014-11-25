<?hh if(!defined("CONF_PATH")) { die("No direct script access allowed."); } /*

----------------------------
------ About this API ------
----------------------------

This API is used to allows using a URL to scrape an article's data.

	
------------------------------
------ Calling this API ------
------------------------------
	
	// Prepare the Packet
	$packet = array(
		"url_slug"		=> $urlSlug		// The url slug being called
	);
	
	// Run the API
	$response = Connect::call("http://example.com/api/ScrapeDataAPI", $packet, "");
	
	
[ Possible Responses ]
	???

*/

class ScrapeDataAPI extends API {
	
	
/****** API Variables ******/
	public bool $isPrivate = false;			// <bool> TRUE if this API is private (requires an API Key), FALSE if not.
	public string $encryptType = "";		// <str> The encryption algorithm to use for response, or "" for no encryption.
	public array <int, str> $allowedSites = array("unifaction");		// <int:str> the sites to allow the API to connect with. Default is all sites.
	public int $microCredits = 100;			// <int> The cost in microcredits (1/10000 of a credit) to access this API.
	public int $minClearance = 6;			// <int> The minimum clearance level required to use this API.
	
	
/****** Run the API ******/
	public function runAPI (
	): array <int, array<str, mixed>>					// RETURNS <int:[str:mixed]> a list of aggregated content entries.
	
	// $this->runAPI()
	{
		// Make sure the appropriate variables were sent
		if(!isset($this->data['url_slug']))
		{
			return false;
		}
		
		// Prepare Values
		$urlSlug = trim(Sanitize::variable($this->data['url_slug'], "-/"), "/");
		
		// Get the article content
		$article = Database::selectOne("SELECT c.* FROM content_by_url u INNER JOIN content_entries c ON u.content_id=c.id WHERE u.url_slug=? LIMIT 1", array($urlSlug));
		
		// Confirm that this article should be transferred
		if($article['clearance_view'] > 2)
		{
			return false;
		}
		
		if($article['status'] < Content::STATUS_OFFICIAL)
		{
			return false;
		}
		
		// Remove unnecessary content
		unset($article['status']);
		unset($article['clearance_view']);
		unset($article['clearance_edit']);
		unset($article['comments']);
		unset($article['voting']);
		
		// Pull core data
		$coreData = Content::scanForCoreData((int) $article['id']);
		
		// Add relevant data
		$article['description'] = $coreData['description'];
		$article['image_url'] = $coreData['image_url'];
		$article['mobile_url'] = $coreData['mobile_url'];
		$article['site_handle'] = SITE_HANDLE;
		$article['url'] = ($article['url'] == "" ? SITE_URL : $article['url']);
		
		// Get Hashtags
		$article['hashtag_list'] = ModuleHashtags::get((int) $article['id']);
		
		// Return article data
		return $article;
	}
	
}