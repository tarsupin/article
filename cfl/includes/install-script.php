<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Football", "Football");
ContentHashtags::create("CFL", "Canadian Football League");
ContentHashtags::create("CFLEast", "CFL East Division");
ContentHashtags::create("TigerCats", "Hamilton Tiger-Cats");
ContentHashtags::create("Alouettes", "Montreal Alouettes");
ContentHashtags::create("Redblacks", "Ottawa Redblacks");
ContentHashtags::create("TORArgonauts", "Toronto Argonauts");
ContentHashtags::create("CFLWest", "CFL West Division");
ContentHashtags::create("BCLions", "BC Lions");
ContentHashtags::create("Stampeders", "Calgary Stampeders");
ContentHashtags::create("EDMEskimos", "Edmonton Eskimos");
ContentHashtags::create("Roughriders", "Saskatchewan Roughriders");
ContentHashtags::create("BlueBombers", "Winnipeg Blue Bombers");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "TigerCats", "Hamilton Tiger-Cats", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "Alouettes", "Montreal Alouettes", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "Redblacks", "Ottawa Redblacks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TORArgonauts", "Toronto Argonauts", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BCLions", "BC Lions", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "Stampeders", "Calgary Stampeders", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "EDMEskimos", "Edmonton Eskimos", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "Roughriders", "Saskatchewan Roughriders", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BlueBombers", "Winnipeg Blue Bombers", ModuleSearch::FILTER_SINGLE);