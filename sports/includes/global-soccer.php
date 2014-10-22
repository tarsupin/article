<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . URL::sports_unifaction_com() . Me::$slg . '">Sports<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Brasileirao">Brasileirao<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Bundesliga">Bundesliga<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Eredivisie">Eredivisie<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FootballLeague">Football League<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/IntlSoccer">International Soccer<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LaLiga">La Liga<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Ligue1">Ligue 1<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MLS">MLS<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PremierLeague">Premier League<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SerieA">Serie A<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ScottishPremiership">Scottish Premiership<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);
