<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Recipes";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AmericanCuisine">American<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CajunCuisine">Cajun<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ChineseCuisine">Chinese<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FrenchCuisine">French<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/GermanCuisine">German<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/IndianCuisine">Indian<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ItalianCuisine">Italian<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/JapaneseCuisine">Japanese<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MexicanCuisine">Mexican<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
