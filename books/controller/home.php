<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Prepare the Content Feed
ContentFeed::prepare();

// Prepare the Search Functionality
$searchArchetype = "search-home";

list($singleFilters, $choiceFilters, $multiFilters) = ModuleSearch::getFilterData($searchArchetype);

// Check if any searches were made
if(ModuleSearch::search($singleFilters, $choiceFilters, $multiFilters))
{
	$contentIDs = ModuleSearch::$contentIDs;
}
else
{
	// Retrieve a list of Recent Content Posts
	$contentIDs = ContentFeed::getRecentEntryIDs();
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
ContentFeed::displayHeader($config['site-name'], "Entertainment", URL::entertainment_unifaction_com());

// Display the Feed
ContentFeed::displayFeed($contentIDs, true, Me::$id);

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
