<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Travel";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/SEAsiaTravel">Southeast Asia<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/IndiaTravel">India<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RussiaTravel">Russia<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ChinaTravel">China<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WestAsiaTravel">West Asia<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);