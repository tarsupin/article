<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/NAmericaTravel">North America<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SAmericaTravel">South America<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/EUTravel">Europe<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AsiaTravel">Asia<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AustraliaTravel">Australia<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AfricaTravel">Africa<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);