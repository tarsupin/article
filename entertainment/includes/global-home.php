<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Entertainment";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/Books">Books<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Gaming">Gaming<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Movies">Movies<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Music">Music<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Shows">Shows<span class="icon-circle-right nav-arrow"></span></a></li>
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
		</ul>
	</div>';
	
	WidgetLoader::add("SidePanel", 11, $html);
}