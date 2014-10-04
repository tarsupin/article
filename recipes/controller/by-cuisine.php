<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Prepare Values
ContentFeed::$backTagTitle = $config['site-name'];
ContentFeed::$activeHashtag = "";
Feed::$returnURL = "/by-cuisine";

// Gather the list of articles in this category
$contentIDs = ContentFeed::getEntryIDsByHashtags(array("AmericanCuisine", "CajunCuisine", "ChineseCuisine", "FrenchCuisine", "GermanCuisine", "IndianCuisine", "ItalianCuisine", "JapaneseCuisine", "MexicanCuisine"));

// Prepare the page for content feeds
ContentFeed::prepare();

/****** Page Configurations ******/
$config['canonical'] = "/by-cuisine";
$config['pageTitle'] = 'Recipes By Cuisine - ' . $config['site-name'];
Metadata::$index = false;
Metadata::$follow = true;

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
ContentFeed::displayHeader("By Cuisine", ContentFeed::$backTagTitle, ContentFeed::$backTagURL);

// Display the Feed
ContentFeed::displayFeed($contentIDs, true, Me::$id);

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
