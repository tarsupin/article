<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Recipes";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/GlutenFreeRecipes">Gluten-Free<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PaleoRecipes">Paleo<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/VeganRecipes">Vegan<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/VegetarianRecipes">Vegetarian<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
