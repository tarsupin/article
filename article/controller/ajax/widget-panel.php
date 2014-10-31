<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Display a Chat Widget
if(isset($_POST['activeHashtag']) and $_POST['activeHashtag'])
{
	$chatWidget = new ChatWidget(Sanitize::variable($_POST['activeHashtag']));
	echo $chatWidget->get();
}

require_once(CONF_PATH . '/includes/widget-panel.php');