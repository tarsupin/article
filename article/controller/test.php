<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

exit;

// Search Official Hashtags
$html = '
<div class="panel-box">
	<div style="padding:10px;">
		<div><strong>Search Hashtags:</strong></div>
		<div style="padding-top:4px;">' . Search::searchBar("hOfficial", "http://hashtag.test", "hashtag-search", "search hashtags . . .", "", "", "") . '</div>
	</div>
</div>';

WidgetLoader::add("SidePanel", 10, $html);

// Add the auto-scroll functionality
Metadata::addHeader('
	<script src="' . URL::cdn_unifaction_com() . '/scripts/autoscroll.js"></script>');

// Run Global Script
require(CONF_PATH . "/includes/global.php");

// Display the Header
require(SYS_PATH . "/controller/includes/metaheader.php");
require(SYS_PATH . "/controller/includes/header.php");

// Display Side Panel
require(SYS_PATH . "/controller/includes/side-panel.php");

// Run a Script
echo '
<script>
	urlToLoad = "/ajax/example-autoloader";
	elementIDToAutoScroll = "my-autoloader-div";
	entriesToReturn = 10;
	maxEntriesAllowed = 100;
	waitDuration = 1200;
</script>';

// Display the Page
echo '
<div id="content">' . Alert::display();

echo '
<div id="my-autoloader-div">test</div>';

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
