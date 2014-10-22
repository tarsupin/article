<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::fashion_unifaction_com() . Me::$slg . '">Fashion<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AthleticShoes">Athletic Shoes<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BoatShoes">Boat Shoes<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Boots">Boots<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Clogs">Clogs<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DressBoots">Dress Boots<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DressShoes">Dress Shoes<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Flats">Flats<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Heels">Heels<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MulesShoes">Mules<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PlatformBoots">Platform Boots<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PlatformShoes">Platform Shoes<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PumpShoes">Pumps<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Sandals">Sandals<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Slingbacks">Slingbacks<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SlipOns">Slip-Ons<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Slippers">Slippers<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
