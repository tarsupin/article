<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot"><a href="/Boating">Boating<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Canoeing">Canoeing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Freediving">Freediving<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Kayaking">Kayaking<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Kitesurfing">Kitesurfing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Rafting">Rafting<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ScubaDiving">ScubaDiving<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Skimboarding">Skimboarding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Surfing">Surfing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Wakeboarding">Wakeboarding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Waterskiing">Waterskiing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Waveski">Waveski<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WhitewaterKayaking">Whitewater Kayaking<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Windsurfing">Windsurfing<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
