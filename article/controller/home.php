<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Include Responsive Script
Photo::prepareResponsivePage();
Metadata::addHeader('<link rel="stylesheet" href="' . CDN . '/css/content-block.css" />');

$fastchatURL = URL::fastchat_social();
$socialURL = URL::unifaction_social();

// Get a list of content entries
$articleFeed = Database::selectMultiple("SELECT id, primary_hashtag FROM content_entries WHERE status >= ? ORDER BY id DESC LIMIT 0, 20", array(Content::STATUS_OFFICIAL));

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

// Loop through the full feed list
foreach($articleFeed as $feed)
{
	$coreData = Content::scanForCoreData((int) $feed['id']);
	$hashtags = ModuleHashtags::get((int) $feed['id']);
	
	// Display the Content
	echo '
	<div class="content-list">';
	
	// If we have a thumbnail version of the image, use that one
	if($coreData['thumbnail'])
	{
		echo '
		<div class="cl-img-wrap"><a href="/' . $coreData['url_slug'] . '">' . Photo::responsive($coreData['thumbnail'], "", 950, "", 950, "cl-img") . '</a></div>';
	}
	
	echo '
		<div class="cl-wrap-right">
			<div class="cl-title"><a href="/' . $coreData['url_slug'] . '">' . $coreData['title'] . '</a></div>
			<div class="cl-body">' . $coreData['body'] . '</div>
			<div class="cl-details">Written by <a href="' . $socialURL . '/' . $coreData['handle'] . '">' . $coreData['display_name'] . '</a> (<a href="' . $fastchatURL . '/' . $coreData['handle'] . '">@' . $coreData['handle'] . '</a>) - ' . date("F jS, Y", $coreData['date_posted']) . '</div>';
	
	// Display the Category Follow option
	if($feed['primary_hashtag'])
	{
		echo '<a href="' . Feed::follow($feed['primary_hashtag']) . '">Follow #' . $feed['primary_hashtag'] . '</a>';
	}
	
	// Display the hashtag list
	if($hashtags)
	{
		$hashtagURL = URL::hashtag_unifaction_com();
		
		echo '<br />';
		
		foreach($hashtags as $htag)
		{
			echo '<a class="c-hashtag" href="' . $hashtagURL . '/' . $htag . '">#' . $htag . '</a> ';
		}
	}
	
	echo '
		</div>
	</div>';
}

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
