<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Fashion";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::fashion_unifaction_com() . Me::$slg . '">Fashion<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AccessoryDesigners">Designers<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Bags">Bags<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Belts">Belts<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Clutches">Clutches<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Eyewear">Eyewear<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Gloves">Gloves<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Hats">Hats<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Jewelry">Jewelry<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Scarves">Scarves<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Totes">Totes<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
