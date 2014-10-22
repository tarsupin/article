<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Main Navigation
$html = '
<div class="panel-box">
	<ul class="panel-slots">
		<li class="nav-slot nav-back"><a href="' . ContentFeed::$backTagURL . Me::$slg . '">' . ContentFeed::$backTagTitle . '<span class="icon-arrow-left nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BluegrassMusic">Bluegrass<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/BluesMusic">Blues<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ChristianMusic">Christian<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ClassicalMusic">Classical<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ComedyAudio">Comedy Audio<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/CountryMusic">Country<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/DanceMusic">Dance<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/EasyListening">Easy Listening<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ElectronicMusic">Electronic<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/FolkMusic">Folk<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/GospelMusic">Gospel<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HardRockMusic">Hard Rock<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HipHopMusic">HipHop<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/HolidayMusic">Holiday<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/IndieMusic">Indie<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/InstrumentalMusic">Instrumental<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/JazzMusic">Jazz<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/LatinoMusic">Latino<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MetalMusic">Metal<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/MusicalsMusic">Musicals<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/NewWaveMusic">New Wave<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PopMusic">Pop<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/PunkMusic">Punk<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RBMusic">R&amp;B<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RapMusic">Rap<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/ReggaeMusic">Reggae<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/RockNRollMusic">Rock &amp; Roll<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SongwriterMusic">Singer/Songwriter<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SoulMusic">Soul<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/SoundtrackMusic">Soundtracks<span class="icon-circle-right nav-arrow"></span></a></li>
		<li class="nav-slot"><a href="/VocalMusic">Vocal<span class="icon-circle-right nav-arrow"></span></a></li>
	</ul>
</div>';

WidgetLoader::add("SidePanel", 10, $html);