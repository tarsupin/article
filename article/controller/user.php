<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Retrieve the user's data
if(!$userData = User::getDataByHandle($url[1], "uni_id, handle, display_name"))
{
	header("Location: /");
}

// Prepare Values
$userData['uni_id'] = (int) $userData['uni_id'];
$myPage = (Me::$id == $userData['uni_id']);

// If the user owns this article list
if($myPage)
{
	// Run the Article Creation Form
	if(Form::submitted(SITE_HANDLE . "-article-gen"))
	{
		// Make sure you don't have too many drafts
		$draftCount = (int) Database::selectValue("SELECT COUNT(*) as totalNum FROM content_by_user u INNER JOIN content_entries c ON u.content_id=c.id WHERE u.uni_id=? AND c.status=? LIMIT 10", array(Me::$id, 0));
		
		if($draftCount >= 10)
		{
			Alert::error("Too Many Drafts", "You have ten unfinished articles being drafted. Please finish some before creating new articles.");
		}
		
		if(FormValidate::pass())
		{
			// Create the New Article
			$contentID = ContentForm::createEntry(Me::$id, "Untitled Article", Content::STATUS_DRAFT, 0);
			
			// Begin editing the article
			header("Location: /article-write?content=" . $contentID); exit;
		}
	}
}

// Get a list of article entries
$entries = Content::getByUser($userData['uni_id'], 0, 20, ($myPage ? Content::STATUS_DRAFT : Content::STATUS_PUBLIC), "id, status");

// Include Responsive Script
Photo::prepareResponsivePage();
Metadata::addHeader('<link rel="stylesheet" href="' . CDN . '/css/content-block.css" />');

/****** Page Configurations ******/
$config['canonical'] = "/user/" . $userData['handle'];
$config['pageTitle'] = $userData['display_name'] . ' - ' . $config['site-name'];
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
<h1>' . $userData['display_name'] . ' - Article</h1>';

// If the user owns this list, show the option to create a new blog
if($myPage)
{
	echo '
	<form class="uniform" action="/user/' . $userData['handle'] . '" method="post">' . Form::prepare(SITE_HANDLE . "-article-gen") . '
		<p><input type="submit" name="submit" value="Create New Article" tabindex="30" /></p>
	</form>';
}

// Display the Page
foreach($entries as $entry)
{
	// Retrieve core data about this article (main title, body, image, etc)
	$coreData = Content::scanForCoreData($entry['id']);
	
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
	
	// If this is a draft, there are special links required
	if($entry['status'] == 0)
	{
		echo '
		<div class="cl-title">[DRAFT] <a href="/article-write?content=' . $entry['id'] . '">' . $coreData['title'] . '</a></div>';
	}
	else
	{
		echo '
		<div class="cl-title">' . ($entry['status'] == 0 ? '[DRAFT] ' : '') . '<a href="/' . $coreData['url_slug'] . '">' . $coreData['title'] . '</a></div>';
	}
	
	echo '
		<div class="cl-body">' . $coreData['body'] . '</div>';
	
	// If this is the user's page, allow them to have editing links available
	if($myPage)
	{
		echo '
		<div class="cl-details">
			<a href="/article-write?content=' . $entry['id'] . '">Edit This Article</a>
		</div>';
	}
	else
	{
		echo '
		<div class="cl-details">Written by <a href="' . URL::unifaction_social() . '/' . $coreData['handle'] . '">' . $coreData['display_name'] . '</a> (<a href="' . URL::fastchat_social() . '/' . $coreData['handle'] . '">@' . $coreData['handle'] . '</a>) - ' . date("F jS, Y", $coreData['date_posted']) . '</div>';
	}
	
	echo '
	</div>';
}

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
