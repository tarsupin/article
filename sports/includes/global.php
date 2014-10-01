<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot' . (in_array($url[0], array("", "home")) ? " nav-active" : "") . '"><a href="/">Home<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Baseball" ? " nav-active" : "") . '"><a href="/Baseball">Baseball<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Basketball" ? " nav-active" : "") . '"><a href="/Basketball">Basketball<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Cricket" ? " nav-active" : "") . '"><a href="/Cricket">Cricket<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Football" ? " nav-active" : "") . '"><a href="/Football">Football<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Golf" ? " nav-active" : "") . '"><a href="/Golf">Golf<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Hockey" ? " nav-active" : "") . '"><a href="/Hockey">Hockey<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "LaCrosse" ? " nav-active" : "") . '"><a href="/LaCrosse">LaCrosse<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Motorsports" ? " nav-active" : "") . '"><a href="/Motorsports">Motorsports<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Rugby" ? " nav-active" : "") . '"><a href="/Rugby">Rugby<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Soccer" ? " nav-active" : "") . '"><a href="/Soccer">Soccer<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot' . ($url[0] == "Tennis" ? " nav-active" : "") . '"><a href="/Tennis">Tennis<span class="icon-circle-right nav-arrow"></span></a></li>';
		
		if(Me::$loggedIn)
		{
			$html .= '
			<li class="nav-slot' . (($url[0] == "user" and isset($url[1]) and $url[1] == Me::$vals['handle']) ? " nav-active" : "") . '"><a href="/user/' . Me::$vals['handle'] . '">My Articles<span class="icon-circle-right nav-arrow"></span></a></li>';
		}
		
		$html .= '
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
