<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("FHL", "Federal Hockey League");
ContentHashtags::create("BerlinRiverDivers", "Berlin River Divers");
ContentHashtags::create("DanburyWhalers", "Danbury Whalers");
ContentHashtags::create("DanvilleDashers", "Danville Dashers");
ContentHashtags::create("DaytonDemonz", "Dayton Demonz");
ContentHashtags::create("SWPAMagic", "SouthWest PA Magic");
ContentHashtags::create("WatertownWolves", "Watertown Wolves");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "BerlinRiverDivers", "Berlin River Divers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DanburyWhalers", "Danbury Whalers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DanvilleDashers", "Danville Dashers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DaytonDemonz", "Dayton Demonz", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SWPAMagic", "SouthWest PA Magic", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WatertownWolves", "Watertown Wolves", ModuleSearch::FILTER_SINGLE);