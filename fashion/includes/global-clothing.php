<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Fashion";
ContentFeed::$backTagURL = "/";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::fashion_unifaction_com() . Me::$slg . '">Fashion<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BridalFashion">Bridal Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CoutureFashion">Couture Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Denim">Denim<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DesignerFashion">Designer Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Intimates">Intimates<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PreFallFashion">Pre-Fall<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ReadyToWear">Ready-to-Wear<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ResortFashion">Resort Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RunwayFashion">Runway Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Sportswear">Sportswear<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Swimwear">Swimwear<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FashionLabels">Labels<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
