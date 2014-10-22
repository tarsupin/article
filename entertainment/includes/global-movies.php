<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ActionMovies">Action<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AdventureMovies">Adventure<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/AnimatedMovies">Animated<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BiographyMovies">Biographies<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ChildrensMovies">Children\'s<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ComedyMovies">Comedies<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CrimeDramaMovies">Crime Dramas<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DocumentaryMovies">Documentaries<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DramaMovies">Drama<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FamilyMovies">Family<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FantasyMovies">Fantasy<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FilmNoir">FilmNoir<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HistoryMovies">History<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HorrorMovies">Horror<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/IndieMovies">Indie<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MusicalsMovies">Musicals<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MysteryMovies">Mystery<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RomanceMovies">Romance<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RomComMovies">Romantic Comedies<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SciFiMovies">Science Fiction<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SportsMovies">Sports<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ThrillerMovies">Thrillers<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WarMovies">War<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/WesternMovies">Westerns<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);