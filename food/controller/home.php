<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

$activeHashtag = "Recipes";

// Prepare Values
ContentFeed::$backTagTitle = $config['site-name'];
ContentFeed::$activeHashtag = $activeHashtag;
Feed::$returnURL = "/" . $activeHashtag;

// Gather the list of articles in this category
$contentIDs = ContentHashtags::getEntryIDs($activeHashtag);

// Prepare the page for content feeds
ContentFeed::prepare();

/****** Page Configuration ******/
$config['canonical'] = "/";
//$config['pageTitle'] = "UniFaction";		// Up to 70 characters. Use keywords.
//$config['description'] = "All of your online interests with one login.";	// Overwrites engine: <160 char
Metadata::$index = false;
Metadata::$follow = true;
// Metadata::openGraph($title, $image, $url, $desc, $type);		// Title = up to 95 chars.

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
ContentFeed::displayHeader($config['site-name'], "UniFaction", URL::unifaction_com());

// Display the Feed
ContentFeed::displayFeed($contentIDs, true, Me::$id);

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
