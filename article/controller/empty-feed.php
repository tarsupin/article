<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Get a valid hashtag
if(!isset($emptyHashtag))
{
	header("Location: /"); exit;
}

// Prepare Values
ContentFeed::$backTagTitle = $config['site-name'];

// Prepare the Content Feed
ContentFeed::prepare();

/****** Page Configurations ******/
$config['canonical'] = "/" . $emptyHashtag['hashtag'];
$config['pageTitle'] = $emptyHashtag['title'] . ' - ' . $config['site-name'];
Metadata::$index = false;
Metadata::$follow = false;

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
ContentFeed::displayHeader($emptyHashtag['title'], ContentFeed::$backTagTitle, ContentFeed::$backTagURL);

echo '
<p>There are no #' . $emptyHashtag['hashtag'] . ' posts available right now.</p>

<p>If you\'re interested in writing guest posts, you can log in to create them. Your posts may even be posted officially.</p>';

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
