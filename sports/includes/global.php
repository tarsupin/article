<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

if(File::exists(CONF_PATH . "/includes/global-" . strtolower($url[0]) . ".php"))
{
	// Load the custom global page
	require_once(CONF_PATH . "/includes/global-" . strtolower($url[0]) . ".php");
}
else if($url[0] == "")
{
	require_once(CONF_PATH . "/includes/global-home.php");
}

// Show Logged In Options
if(Me::$loggedIn)
{
	$html = '
	<div class="panel-box" style="min-height:10px;">
		<ul class="panel-notes" style="margin-top:10px;">
			<li class="nav-note"><a href="/user/' . Me::$vals['handle'] . '">My Articles</a></li>
			<li class="nav-note"><a href="/all-articles">All Articles</a></li>
		</ul>
	</div>';
	
	WidgetLoader::add("SidePanel", 11, $html);
}