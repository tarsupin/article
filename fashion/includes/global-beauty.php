<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Fashion";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/BeautyBrands">Brands<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BodyCare">Body Care<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Fragrances">Fragrances<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HairCare">Hair Care<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Makeup">Makeup<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SkinCare">Skin Care<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
