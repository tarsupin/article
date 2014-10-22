<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ConsoleGaming">Console Gaming<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PCGaming">PC Gaming<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MobileGaming">Mobile Gaming<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);