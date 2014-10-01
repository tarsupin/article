<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot' . (in_array($url[0], array("", "home")) ? " nav-active" : "") . '"><a href="/">Home<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "air" ? " nav-active" : "") . '"><a href="/air">Airborne<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "offroad" ? " nav-active" : "") . '"><a href="/offroad">Offroad<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "outdoor" ? " nav-active" : "") . '"><a href="/outdoor">Outdoor<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "snow" ? " nav-active" : "") . '"><a href="/snow">Snow<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "urban" ? " nav-active" : "") . '"><a href="/urban">Urban<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "water" ? " nav-active" : "") . '"><a href="/water">Water<span class="icon-circle-right nav-arrow"></span></a></li>';
		
		if(Me::$loggedIn)
		{
			$html .= '
			<li class="nav-slot' . (($url[0] == "user" and isset($url[1]) and $url[1] == Me::$vals['handle']) ? " nav-active" : "") . '"><a href="/user/' . Me::$vals['handle'] . '">My Articles<span class="icon-circle-right nav-arrow"></span></a></li>';
		}
		
		$html .= '
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
