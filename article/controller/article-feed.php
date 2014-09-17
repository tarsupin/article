<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Get a valid hashtag
if(!isset($activeHashtag))
{
	header("Location: /"); exit;
}

// Gather the list of articles in this category
$entryIDs = ContentHashtags::getEntryIDs($activeHashtag);

// Get the hashtag title
if(!$hashtagTitle = Database::selectValue("SELECT title FROM content_site_hashtags WHERE hashtag=? LIMIT 1", array($activeHashtag)))
{
	$hashtagTitle = $activeHashtag;
}

// Include Responsive Script
Photo::prepareResponsivePage();
Metadata::addHeader('<link rel="stylesheet" href="' . CDN . '/css/content-block.css" />');

$fastchatURL = URL::fastchat_social();
$socialURL = URL::unifaction_social();

/****** Page Configurations ******/
$config['canonical'] = "/" . $activeHashtag;
$config['pageTitle'] = $hashtagTitle . ' - ' . $config['site-name'];
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

echo '
<h1>' . $hashtagTitle . '</h1>';

// Display the Page
foreach($entryIDs as $entry)
{
	// Retrieve core data about this article (main title, body, image, etc)
	$coreData = Content::scanForCoreData((int) $entry['content_id']);
	
	// Display the Content
	echo '
	<div class="content-list">';
	
	// If we have a thumbnail version of the image, use that one
	if($coreData['thumbnail'])
	{
		echo '
		<div class="cl-img-wrap"><a href="/' . $coreData['url_slug'] . '">' . Photo::responsive($coreData['thumbnail'], "", 950, "", 950, "cl-img") . '</a></div>';
	}
	
	// If we have a small version of the image, use that one
	else if($coreData['mobile_url'])
	{
		echo '
		<div class="cl-img-wrap"><a href="/' . $coreData['url_slug'] . '">' . Photo::responsive($coreData['mobile_url'], "", 950, "", 950, "cl-img") . '</a></div>';
	}
	
	// If there is an image, show it
	else if($coreData['image_url'])
	{
		echo '
		<div class="cl-img-wrap"><a href="/' . $coreData['url_slug'] . '">' . Photo::responsive($coreData['image_url'], $coreData['mobile_url'], 950, "", 950, "cl-img") . '</a></div>';
	}
	
	echo '
		<div class="cl-wrap-right">
			<div class="cl-title"><a href="/' . $coreData['url_slug'] . '">' . $coreData['title'] . '</a></div>
			<div class="cl-body">' . $coreData['body'] . '</div>
			<div class="cl-details">Written by <a href="' . $socialURL . '/' . $coreData['handle'] . '">' . $coreData['display_name'] . '</a> (<a href="' . $fastchatURL . '/' . $coreData['handle'] . '">@' . $coreData['handle'] . '</a>) - ' . date("F jS, Y", $coreData['date_posted']) . '</div>
		</div>
	</div>';
}

echo '
</div>
<div class="spacer-huge"></div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
