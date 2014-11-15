<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Load the Social Menu
require(SYS_PATH . "/controller/includes/social-menu.php");

// UniFaction Dropdown Menu
require(SYS_PATH . "/controller/includes/uni-menu.php");

// Left + Mobile Panel
WidgetLoader::add("SidePanel", 10, '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::unifaction_com() . Me::$slg . '">UniFaction<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot' . (in_array($url[0], array("", "home")) ? " nav-active" : "") . '"><a href="/">Home<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Architecture" ? " nav-active" : "") . '"><a href="/Architecture">Architecture<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "InteriorDesign" ? " nav-active" : "") . '"><a href="/InteriorDesign">Interior Design<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Lighting" ? " nav-active" : "") . '"><a href="/Lighting">Lighting<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Furniture" ? " nav-active" : "") . '"><a href="/Furniture">Furniture<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "HomeArt" ? " nav-active" : "") . '"><a href="/HomeArt">HomeArt<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Decor" ? " nav-active" : "") . '"><a href="/Decor">Decor<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "DIY" ? " nav-active" : "") . '"><a href="/DIY">DIY<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>');

// Show Logged In Options
if(Me::$loggedIn)
{
	WidgetLoader::add("SidePanel", 11, '
	<div class="panel-box" style="min-height:10px;">
		<ul class="panel-notes" style="margin-top:10px;">
			<li class="nav-note"><a href="/user/' . Me::$vals['handle'] . '">My Articles</a></li>
			<li class="nav-note"><a href="/all-articles">All Articles</a></li>
		</ul>
	</div>');
}