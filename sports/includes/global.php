<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

if(File::exists(CONF_PATH . "/includes/global-" . strtolower($url[0]) . ".php"))
{
	// Load the custom global page
	require_once(CONF_PATH . "/includes/global-" . strtolower($url[0]) . ".php");
}
else
{
	// Main Navigation
	$html = '
	<div class="panel-box">
		<ul class="panel-slots">
			<li class="nav-slot"><a href="/Baseball">Baseball<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Basketball">Basketball<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Cricket">Cricket<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/CombatSports">Combat Sports<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Football">Football<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Golf">Golf<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Hockey">Hockey<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/LaCrosse">LaCrosse<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Motorsports">Motorsports<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Rugby">Rugby<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Soccer">Soccer<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/Tennis">Tennis<span class="icon-circle-right nav-arrow"></span></a></li>
			<li class="nav-slot"><a href="/more-sports">More Sports<span class="icon-circle-right nav-arrow"></span></a></li>';
			
			if(Me::$loggedIn)
			{
				$html .= '
				<li class="nav-slot' . (($url[0] == "user" and isset($url[1]) and $url[1] == Me::$vals['handle']) ? " nav-active" : "") . '"><a href="/user/' . Me::$vals['handle'] . '">My Articles<span class="icon-circle-right nav-arrow"></span></a></li>';
			}
			
			$html .= '
		</ul>
	</div>';
	
	WidgetLoader::add("SidePanel", 10, $html);
}