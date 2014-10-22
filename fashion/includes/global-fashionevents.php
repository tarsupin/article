<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Prepare Values
ContentFeed::$backTagTitle = "Fashion News";
ContentFeed::$backTagURL = "/FashionNews";

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BerlinFashionWeek">Berlin Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BonnarooFashion">Bonnaroo Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CoachellaFashion">Coachella Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CopenhagenFashionWeek">Copenhagen Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LollapaloozaFashion">Lollapalooza Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LondonFashionWeek">London Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LAFashionWeek">LA Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MadridFashionWeek">Madrid Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MilanFashionWeek">Milan Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NYCFashionWeek">NYC Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ParisFashionWeek">Paris Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SundanceFashion">Sundance Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SXSWFashion">SXSW Fashion<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/TokyoFashionWeek">Tokyo Fashion Week<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);