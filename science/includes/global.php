<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot' . (in_array($url[0], array("", "home")) ? " nav-active" : "") . '"><a href="/">Home<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Astronomy" ? " nav-active" : "") . '"><a href="/Astronomy">Astronomy<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Biology" ? " nav-active" : "") . '"><a href="/Biology">Biology<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Chemistry" ? " nav-active" : "") . '"><a href="/Chemistry">Chemistry<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "EarthSciences" ? " nav-active" : "") . '"><a href="/EarthSciences">Earth Sciences<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Engineering" ? " nav-active" : "") . '"><a href="/Engineering">Engineering<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Math" ? " nav-active" : "") . '"><a href="/Math">Mathematics<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Medical" ? " nav-active" : "") . '"><a href="/Medical">Medical<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Physics" ? " nav-active" : "") . '"><a href="/Physics">Physics<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "SocialSciences" ? " nav-active" : "") . '"><a href="/SocialSciences">Social Sciences<span class="icon-circle-right nav-arrow"></span></a></li>';
		
		if(Me::$loggedIn)
		{
			$html .= '
			<li class="nav-slot' . (($url[0] == "user" and isset($url[1]) and $url[1] == Me::$vals['handle']) ? " nav-active" : "") . '"><a href="/user/' . Me::$vals['handle'] . '">My Articles<span class="icon-circle-right nav-arrow"></span></a></li>';
		}
		
		$html .= '
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
