<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Recipes";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/Appetizers">Appetizers<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Breakfast">Breakfast<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Dessert">Dessert<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Drink">Drink<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MainCourse">Main Course<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Salad">Salad<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Sandwich">Sandwich<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Sides">Sides<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Soup">Soup<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
