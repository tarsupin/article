<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AwardWinningBooks">Award Winning<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BestsellingBooks">Bestselling<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BiographyBooks">Biographies<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BusinessBooks">Business<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ChildrensBooks">Children\'s<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Cookbooks">Cookbooks<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DIYBooks">DIY<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FantasyBooks">Fantasy<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FictionBooks">Fiction<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/GraphicNovels">Graphic Novels<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HealthBooks">Health &amp; Fitness<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HistoricalFictionBooks">Historical Fiction<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HistoryBooks">History<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MysteryBooks">Mystery<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ReligiousBooks">Religious<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RomanceBooks">Romance<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SciFiBooks">Science Fiction<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SelfImprovementBooks">Self-Improvement<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/TravelBooks">Travel<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);