<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// List of Hashtags
//$hashtagList = Database::selectMultiple("SELECT * FROM content_site_hashtags ORDER BY hashtag ASC", array());
$hashtagList = ContentHashtags::hashtagList();

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

foreach($hashtagList as $list)
{
	echo '<a href="/' . $list['hashtag'] . '">' . $list['title'] . ' (#' . $list['hashtag'] . ')</a><br />';
}

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
