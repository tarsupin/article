<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Recipes";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BeefRecipes">Beef<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CheeseRecipes">Cheese<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ChickenRecipes">Chicken<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DuckRecipes">Duck<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/EggRecipes">Egg<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FishRecipes">Fish<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LambRecipes">Lamb<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PastaRecipes">Pasta<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PorkRecipes">Pork<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RiceRecipes">Rice<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SeafoodRecipes">Seafood<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/TurkeyRecipes">Turkey<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/VegetableRecipes">Vegetable<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
