<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot' . (in_array($url[0], array("", "home")) ? " nav-active" : "") . '"><a href="/">Home<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="' . URL::books_unifaction_com() . '">Books<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="' . URL::movies_unifaction_com() . '">Movies<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="' . URL::music_unifaction_com() . '">Music<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="' . URL::shows_unifaction_com() . '">Shows<span class="icon-circle-right nav-arrow"></span></a></li>';
		
		if(Me::$loggedIn)
		{
			$html .= '
			<li class="nav-slot' . (($url[0] == "user" and isset($url[1]) and $url[1] == Me::$vals['handle']) ? " nav-active" : "") . '"><a href="/user/' . Me::$vals['handle'] . '">My Articles<span class="icon-circle-right nav-arrow"></span></a></li>';
		}
		
		$html .= '
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
