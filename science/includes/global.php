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
		<li class="nav-slot' . ($url[0] == "Astronomy" ? " nav-active" : "") . '"><a href="/Astronomy">Astronomy<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Biology" ? " nav-active" : "") . '"><a href="/Biology">Biology<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Chemistry" ? " nav-active" : "") . '"><a href="/Chemistry">Chemistry<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "EarthSciences" ? " nav-active" : "") . '"><a href="/EarthSciences">Earth Sciences<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Engineering" ? " nav-active" : "") . '"><a href="/Engineering">Engineering<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Health" ? " nav-active" : "") . '"><a href="/Health">Health<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Math" ? " nav-active" : "") . '"><a href="/Math">Mathematics<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Medical" ? " nav-active" : "") . '"><a href="/Medical">Medical<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Physics" ? " nav-active" : "") . '"><a href="/Physics">Physics<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "SocialSciences" ? " nav-active" : "") . '"><a href="/SocialSciences">Social Sciences<span class="icon-circle-right nav-arrow"></span></a></li>
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