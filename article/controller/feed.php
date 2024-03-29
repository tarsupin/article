<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Get a valid hashtag
if(!isset($activeHashtag))
{
	header("Location: /"); exit;
}

// Prepare Values
ContentFeed::$backTagTitle = $config['site-name'];
ContentFeed::$activeHashtag = $activeHashtag;
Feed::$returnURL = "/" . $activeHashtag;

// Gather the list of articles in this category
$contentIDs = ContentHashtags::getEntryIDs($activeHashtag);

// Get the hashtag title
if(!$hashtagTitle = Database::selectValue("SELECT title FROM content_site_hashtags WHERE hashtag=? LIMIT 1", array($activeHashtag)))
{
	$hashtagTitle = $activeHashtag;
}

// Prepare the page for content feeds
ContentFeed::prepare();

/****** Page Configurations ******/
$config['canonical'] = "/" . $activeHashtag;
$config['pageTitle'] = $hashtagTitle . ' - ' . $config['site-name'];
Metadata::$index = false;
Metadata::$follow = true;

// Prepare Official Hashtag
$config['active-hashtag'] = $activeHashtag;

// Run Global Script
require(CONF_PATH . "/includes/global.php");

// Display the Header
require(SYS_PATH . "/controller/includes/metaheader.php");
require(SYS_PATH . "/controller/includes/header.php");

// Display Side Panel
require(SYS_PATH . "/controller/includes/side-panel.php");

echo '
<div id="panel-right"></div>
<div id="content">' . Alert::display();

// Display the Feed Header
ContentFeed::displayHeader($hashtagTitle, ContentFeed::$backTagTitle, ContentFeed::$backTagURL);

// Display the Feed
ContentFeed::displayFeed($contentIDs, true, Me::$id);

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
