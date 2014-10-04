<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/FreestyleScootering">Freestyle Scootering<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Longboarding">Longboarding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Paintballing">Paintballing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Parkour">Parkour<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Skateboarding">Skateboarding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/StreetLuging">StreetLuging<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Xpogoing">Xpogoing<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
