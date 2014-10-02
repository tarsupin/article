<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/MLB">MLB<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NCAAB">NCAA Baseball<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
