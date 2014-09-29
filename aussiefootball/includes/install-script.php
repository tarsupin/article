<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Football", "Football");
ContentHashtags::create("AustralianFootball", "Australian Football League");
ContentHashtags::create("ADECows", "Adelaide Crows");
ContentHashtags::create("BRILions", "Brisbane Lions");
ContentHashtags::create("CARBlues", "Carlton Blues");
ContentHashtags::create("COLMagpies", "Collingwood Magpies");
ContentHashtags::create("ESSBombers", "Essendon Bombers");
ContentHashtags::create("FREDockers", "Fremantle Dockers");
ContentHashtags::create("GEECats", "Geelong Cats");
ContentHashtags::create("GCSuns", "Gold Coast Suns");
ContentHashtags::create("GWSGiants", "GWS Giants");
ContentHashtags::create("HAWHawks", "Hawthorn Hawks");
ContentHashtags::create("MELDemons", "Melbourne Demons");
ContentHashtags::create("NMKangaroos", "North Melbourne Kangaroos");
ContentHashtags::create("PORPower", "Port Adelaide Power");
ContentHashtags::create("RICTigers", "Richmond Tigers");
ContentHashtags::create("STKSaints", "St. Kilda Saints");
ContentHashtags::create("SYDSwans", "Sydney Swans");
ContentHashtags::create("WCEagles", "West Coast Eagles");
ContentHashtags::create("WesternBullDogs", "Western Bulldogs");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "ADECows", "Adelaide Crows", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BRILions", "Brisbane Lions", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CARBlues", "Carlton Blues", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "COLMagpies", "Collingwood Magpies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ESSBombers", "Essendon Bombers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "FREDockers", "Fremantle Dockers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GEECats", "Geelong Cats", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GCSuns", "Gold Coast Suns", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GWSGiants", "GWS Giants", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "HAWHawks", "Hawthorn Hawks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MELDemons", "Melbourne Demons", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NMKangaroos", "North Melbourne Kangaroos", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PORPower", "Port Adelaide Power", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "RICTigers", "Richmond Tigers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "STKSaints", "St. Kilda Saints", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SYDSwans", "Sydney Swans", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WCEagles", "West Coast Eagles", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WesternBullDogs", "Western Bulldogs", ModuleSearch::FILTER_SINGLE);