<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::sports_unifaction_com() . Me::$slg . '">Sports<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Bellator">Bellator<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Boxing">Boxing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/TNA">TNA<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/UFC">UFC<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WSOF">WSOF<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WWE">WWE<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);