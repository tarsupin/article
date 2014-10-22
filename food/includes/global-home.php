<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::unifaction_com() . Me::$slg . '">UniFaction<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PopularRecipes">Popular<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/by-diet">By Diet<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/by-course">By Course<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/by-ingredient">By Ingredient<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/by-cuisine">By Cuisine<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);