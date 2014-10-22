<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::gotrek_today() . Me::$slg . '">GoTrek<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Freeskiing">Freeskiing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/IceCanoeing">Ice Canoeing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/IceClimbing">Ice Climbing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Skiing">Skiing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Snowboarding">Snowboarding<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Snowmobiling">Snowmobiling<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Snowshoeing">Snowshoeing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Snowskating">Snowskating<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
