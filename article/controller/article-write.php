<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Force the user to log in
if(!Me::$loggedIn)
{
	Me::redirectLogin("/");
}

// Prepare Form
$contentForm = new ArticleForm('/article-write', (isset($_GET['content']) ? (int) $_GET['content'] : 0));

// Set the modules allowed in this content entry
/*
$contentForm->modules = array(
	"Hashtags"		=> ArticleForm::MODULE_TYPE_META
,	"Text"			=> ArticleForm::MODULE_TYPE_SEGMENT
,	"Image"			=> ArticleForm::MODULE_TYPE_SEGMENT
,	"Video"			=> ArticleForm::MODULE_TYPE_SEGMENT
,	"Related"		=> ArticleForm::MODULE_TYPE_META
);
*/

// Prepare Settings
ArticleForm::$contentType = 'article';					// Set the content entry type.

$contentForm->guestPosts = true;						// Allows guest submissions on the site.
$contentForm->maxStatus = 4;							// Sets the maximum allowed status for a user to set.

// Allow high-clearance users to post higher statuses
if(Me::$clearance >= 6)
{
	$contentForm->maxStatus = 6;
}

// $contentForm->urlPrefix = Me::$vals['handle'] . '/';		// Used in the blog
// $contentForm->urlFixed = "";								// If set, forces the URL to be a specific value
$contentForm->urlClearance = ArticleForm::URL_ONCE;			// Allows the writer to update his own URL

$contentForm->useComments = true;			// Allows comments
$contentForm->useVoting = true;				// Allows voting

// Make sure you have permissions to edit this form
$contentForm->verifyAccess("/my-articles");

// Run Behaviors and Interpreters
$contentForm->runBehavior();
$contentForm->runInterpreter();

// Include Responsive Script
Photo::prepareResponsivePage();
Metadata::addHeader('<link rel="stylesheet" href="' . CDN . '/css/content-block.css" />');

// Run Global Script
require(CONF_PATH . "/includes/global.php");

// Display the Header
require(SYS_PATH . "/controller/includes/metaheader.php");
require(SYS_PATH . "/controller/includes/header.php");

// Side Panel
require(SYS_PATH . "/controller/includes/side-panel.php");

// Display the Page
echo '
<div id="panel-right"></div>
<div id="content">' . Alert::display();

echo '
<h1>' . $contentForm->contentData['title'] . '</h1>';

$contentForm->drawEditingBox();
$contentForm->drawContent();

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
