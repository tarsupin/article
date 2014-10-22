<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::sports_unifaction_com() . Me::$slg . '">Sports<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AFL">Arena Football<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AustralianFootball">Australian Football<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CFL">CFL<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NCAAF">NCAA Football<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NFL">NFL<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
