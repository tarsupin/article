<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::sports_unifaction_com() . Me::$slg . '">Sports<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AHL">AHL<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CHL">CHL<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ECHL">ECHL<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FHL">FHL<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NCAAH">NCAAH<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NHL">NHL<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/OHL">OHL<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SPHL">SPHL<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
