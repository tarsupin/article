<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::gotrek_today() . Me::$slg . '">GoTrek<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BASEJumping">BASE Jumping<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CaveDiving">Cave Diving<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Freeflying">Freeflying<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HangGliding">Hang Gliding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Paragliding">Paragliding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Skydiving">Skydiving<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WingsuitFlying">Wingsuit Flying<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
