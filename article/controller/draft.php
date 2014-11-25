<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Make sure the $contentID value was passed properly
if(!isset($_GET['id']))
{
	header("Location: /"); exit;
}

// Prepare Content Entry
if(!Content::prepare((int) $_GET['id']))
{
	header("Location: /"); exit;
}

/****** Page Configurations ******/
$config['canonical'] = "/" . Content::$contentData['url_slug'];
$config['pageTitle'] = Content::$contentData['title'];
Metadata::$index = true;
Metadata::$follow = true;

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">';
		
	if(Content::$contentData['primary_hashtag'])
	{
		$html .= '
		<li class="nav-slot nav-back"><a href="/' . Content::$contentData['primary_hashtag'] . '">#' . Content::$contentData['primary_hashtag'] . '<span class="icon-arrow-left nav-arrow"></span></a></li>';
	}
	
	$html .= '
		<li class="nav-slot nav-back"><a href="/">' . $config['site-name'] . '<span class="icon-arrow-left nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);

// Prepare Official Hashtag
$config['active-hashtag'] = Content::$contentData['primary_hashtag'];

// Set the active user
You::$id = Content::$contentData['uni_id'];
You::$handle = Content::$contentData['handle'];

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

// Display the Content
Content::display();

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
