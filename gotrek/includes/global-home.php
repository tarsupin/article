<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/air">Airborne<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Fitness">Fitness<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/offroad">Offroad<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/outdoor">Outdoor<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/snow">Snow<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/urban">Urban<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/water">Water<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
