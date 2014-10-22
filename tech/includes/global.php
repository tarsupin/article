<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::unifaction_com() . Me::$slg . '">UniFaction<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot' . (in_array($url[0], array("", "home")) ? " nav-active" : "") . '"><a href="/">Home<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "TechNews" ? " nav-active" : "") . '"><a href="/TechNews">Tech News<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Gadgets" ? " nav-active" : "") . '"><a href="/Gadgets">Gadgets<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Hardware" ? " nav-active" : "") . '"><a href="/Hardware">Hardware<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Software" ? " nav-active" : "") . '"><a href="/Software">Software<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Mobile" ? " nav-active" : "") . '"><a href="/Mobile">Mobile<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "RetroTech" ? " nav-active" : "") . '"><a href="/RetroTech">Retro Tech<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);

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