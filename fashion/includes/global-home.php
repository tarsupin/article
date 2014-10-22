<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::unifaction_com() . Me::$slg . '">UniFaction<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Accessories">Accessories<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Beauty">Beauty<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Clothing">Clothing<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FashionNews">Fashion News<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Footwear">Footwear<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FashionStyles">Styles<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FashionTips">FashionTips<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);