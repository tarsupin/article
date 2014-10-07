<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Require Login
if(!Me::$loggedIn)
{
	Me::redirectLogin("/about-author", "/");
}

// Run the submission
if(Form::submitted("about-author-uni6"))
{
	if(ModuleAuthor::set(Me::$id, Sanitize::safeword($_POST['author_block'], " '\"#!?,.")))
	{
		Alert::saveSuccess("Update Successful", "You have successfully updated your author block.");
		
		header("Location: /user/" . Me::$vals['handle']); exit;
	}
	else
	{
		Alert::error("Update Failed", "There was an error while attempting to update this block.");
	}
}

// Get Author Data
$authorData = ModuleAuthor::get(Me::$id);

/****** Page Configurations ******/
$config['canonical'] = "/about-author";
$config['pageTitle'] = "About the Author";
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

echo '
<h3>"About the Author" Block</h3>
<form class="uniform" action="/author-about" method="post">' . Form::prepare("about-author-uni6") . '
	<div><textarea name="author_block" style="width:96%; height:140px;" maxlength="200" autofocus tabindex="10">' . $authorData['blurb'] . '</textarea></div>
	<div style="margin-top:22px;"><input type="submit" name="submit" value="Update Block" /></div>
</form>';

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
