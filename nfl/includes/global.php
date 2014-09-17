<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Notifications (if available)
if(Me::$loggedIn)
{
	WidgetLoader::add("SidePanel", 1, Notifications::sideWidget());
}

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot' . (in_array($url[0], array("", "home")) ? " nav-active" : "") . '"><a href="/">Home<span class="icon-circle-right nav-arrow"></span></a></li>';
		
		if(Me::$loggedIn)
		{
			$html .= '
			<li class="nav-slot' . (($url[0] == "user" and isset($url[1]) and $url[1] == Me::$vals['handle']) ? " nav-active" : "") . '"><a href="/user/' . Me::$vals['handle'] . '">My Articles<span class="icon-circle-right nav-arrow"></span></a></li>';
		}
		
		$html .= '
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);

// Widgets

// Document List
WidgetLoader::add("SidePanel", 50, '
<div class="panel-box">
	<a href="#" class="panel-head">Documents<span class="icon-circle-right nav-arrow"></span></a>
	<ul class="panel-notes">
		<li class="nav-note"><a href="/docs/faqs">Frequently Asked Questions</a></li>
		<li class="nav-note"><a href="/docs/tos">Terms of Service</a></li>
		<li class="nav-note"><a href="/docs/privacy">Privacy Policy</a></li>
		<li class="nav-note"><a href="/">Contact Us</a></li>
	</ul>
</div>');