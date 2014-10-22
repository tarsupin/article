<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::gotrek_today() . Me::$slg . '">GoTrek<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BMX">BMX<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LandWindsurfing">Land Windsurfing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Motocross">Motocross<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MountainBiking">Mountain Biking<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MountainBoarding">Mountain Boarding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RallyRacing">Rally Racing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Sandboarding">Sandboarding<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
