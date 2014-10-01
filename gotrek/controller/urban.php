<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Prepare the Content Feed
ContentFeed::prepare();

$hashtagList = array("FreestyleScootering", "Longboarding", "Paintballing", "Parkour", "Skateboarding", "StreetLuging", "Xpogoing");

// Prepare the Search Functionality
$searchArchetype = "urban-sports";

list($singleFilters, $choiceFilters, $multiFilters) = ModuleSearch::getFilterData($searchArchetype);

// Check if any searches were made
if(ModuleSearch::search($singleFilters, $choiceFilters, $multiFilters))
{
	$contentIDs = ModuleSearch::$contentIDs;
}
else
{
	// Retrieve a list of entries based on the hashtags provied
	$contentIDs = ContentFeed::getEntryIDsByHashtags($hashtagList);
}

// Display Search Widget
$widgetHTML = ModuleSearch::widget($url_relative, $singleFilters, $choiceFilters, $multiFilters);
WidgetLoader::add("SidePanel", 12, $widgetHTML);

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
ContentFeed::displayHeader("Urban Sports", $config['site-name'], "/");

// Display the Feed
ContentFeed::displayFeed($contentIDs, true, Me::$id);

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
