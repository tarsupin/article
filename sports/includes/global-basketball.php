<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot' . ($url[0] == "NBA" ? " nav-active" : "") . '"><a href="/NBA">NBA<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "NCAAM" ? " nav-active" : "") . '"><a href="/NCAAM">NCAAM<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "WNBA" ? " nav-active" : "") . '"><a href="/WNBA">WNBA<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
