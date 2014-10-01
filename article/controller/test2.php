<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

exit;

// Run Global Script
require(CONF_PATH . "/includes/global.php");

// Display the Header
require(SYS_PATH . "/controller/includes/metaheader.php");
require(SYS_PATH . "/controller/includes/header.php");

// Display Side Panel
require(SYS_PATH . "/controller/includes/side-panel.php");

echo '
<div id="content">' . Alert::display();

// <!--UniAd:{"structure":"AdStructure", "site":"SiteHandle", "zone":"AdZoneName", "key":"TargetingKeyword", "desc":"Ad Description, such as Location on Page", "minCPM":{MIN_COSTS}}-->

$ad = new AdSponsored("RectImg-230x150", "MenuAd", "sports", "This ad appears in the left panel directly beneath the main menu.");

echo htmlspecialchars($ad->adCode());

echo "
<br /><br />";

echo $ad->run();

$ad = new AdSponsored("RectImg-230x150", "CenterPage", "blah", "This ad is randomly placed in the center of the page for no good reason.");

if($ad->visible)
{
	echo "<br /><br />";
	echo $ad->run();
}


echo "<br /><br />";

$ad = new AdSponsored("TextBox-230x90:25,70", "TextThing", "texty", "This ad is a text box that is like... woah and stuff.");
echo $ad->run();


/*
Benchmark::setMode(Benchmark::MODE_VERBOSE);
Benchmark::get();


Benchmark::get();
*/

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
