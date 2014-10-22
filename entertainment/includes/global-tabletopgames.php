<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BoardGames">Board Games<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CardGames">Card Games<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MiniatureGames">Miniature Games<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Roleplaying">Roleplaying<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);