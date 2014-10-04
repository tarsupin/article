<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Travel";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/WestEUTravel">West Europe<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/EastEUTravel">East Europe<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ScandanavianTravel">Scandinavia<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MediterraneanTravel">Mediterranean<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);