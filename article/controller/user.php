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
			header("Location: /write?id=" . $contentID); exit;
		}
	}
}

// Get a list of the user's Content Entries
$contentIDs = ContentFeed::getUserEntryIDs($userData['uni_id']);

// Prepare the Content Feed
ContentFeed::prepare();

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

// Display the Feed Header
ContentFeed::displayHeader($userData['display_name'] . "'s Articles", $config['site-name'], "/");

// If the user owns this list, show the option to create a new article
if($myPage)
{
	echo '
	<form class="uniform" action="/user/' . $userData['handle'] . '" method="post">' . Form::prepare(SITE_HANDLE . "-article-gen") . '
		<p><input type="submit" name="submit" value="Create New Article" tabindex="30" /></p>
	</form>';
}

// Display the Feed
ContentFeed::displayFeed($contentIDs, true, Me::$id);

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
