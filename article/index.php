<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Initialize and Test Active User's Behavior
if(Me::initialize())
{
	Me::runBehavior($url);
}

// Determine which page you should point to, then load it
require(SYS_PATH . "/routes.php");

/****** Dynamic URLs ******/
// If a page hasn't loaded yet, check if there is a dynamic load
if($url[0] != '')
{
	// Check if a specific article is being loaded
	if(strpos($url[0], "-"))
	{
		if($contentID = (int) Database::selectValue("SELECT content_id FROM content_by_url WHERE url_slug=? LIMIT 1", array($url[0])))
		{
			require(APP_PATH . '/controller/article.php'); exit;
		}
	}
	
	// Check if a feed is being loaded
	else
	{
		// Get a valid hashtag on the system
		if($activeHashtag = Database::selectValue("SELECT hashtag FROM content_by_hashtag WHERE hashtag=? LIMIT 1", array($url[0])))
		{
			require(APP_PATH . '/controller/article-feed.php'); exit;
		}
		
		// If the hashtag is valid, but currently empty, load the empty feed page
		if($emptyHashtag = Database::selectOne("SELECT hashtag, title FROM content_site_hashtags WHERE hashtag=? LIMIT 1", array($url[0])))
		{
			require(APP_PATH . '/controller/empty-feed.php'); exit;
		}
	}
}
//*/

/****** 404 Page ******/
// If the routes.php file or dynamic URLs didn't load a page (and thus exit the scripts), run a 404 page.
require(SYS_PATH . "/controller/404.php");