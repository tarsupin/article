<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/Biking">Biking<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Camping">Camping<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Hiking">Hiking<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Hunting">Hunting<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Running">Running<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Climbing">Climbing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Fishing">Fishing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Trail Running">Trail Running<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Trapping">Trapping<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Caving">Caving<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
