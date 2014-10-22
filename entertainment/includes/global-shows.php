<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ActionShows">Action &amp; Adventure<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AnimatedShows">Animated &amp; Cartoons<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AnimeShows">Anime<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CultureShows">Art &amp; Culture<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ClassicShows">Classics<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ComedyShows">Comedy<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DocumentaryShows">Documentaries<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DramaShows">Drama<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FamilyShows">Family<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FoodShows">Food Shows<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/GameShows">Game Shows<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HealthShows">Health &amp; Wellness<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HorrorShows">Horror &amp; Suspense<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/KidsShows">Kids<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/KoreanDramaShows">Korean Drama<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LatinoShows">Latino<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LifestyleShows">Lifestyle<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MusicShows">Music<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NewsShows">News<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RealityShows">Reality TV<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ReligiousShows">Religious<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SciFiShows">Science Fiction<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/Sitcoms">Sitcoms<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SoapOperas">Soap Operas<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SportsShows">Sports<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/TechShows">Tech<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/TravelShows">Travel<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WeatherShows">Weather<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);