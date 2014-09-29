<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("CHL", "Central Hockey League");
ContentHashtags::create("CHLBerryConf", "CHL Berry Conference");
ContentHashtags::create("AllenAmericans", "Allen Americans");
ContentHashtags::create("AZSundogs", "Arizona Sundogs");
ContentHashtags::create("BramptonBeast", "Brampton Beast");
ContentHashtags::create("DenverCutthroats", "Denver Cutthroats");
ContentHashtags::create("MissouriMavericks", "Missouri Mavericks");
ContentHashtags::create("QuadCityMallards", "Quad City Mallards");
ContentHashtags::create("RapidCityRush", "Rapid City Rush");
ContentHashtags::create("TulsaOilers", "Tulsa Oilers");
ContentHashtags::create("WichitaThunder", "Wichita Thunder");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "AllenAmericans", "Allen Americans", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "AZSundogs", "Arizona Sundogs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BramptonBeast", "Brampton Beast", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DenverCutthroats", "Denver Cutthroats", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MissouriMavericks", "Missouri Mavericks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "QuadCityMallards", "Quad City Mallards", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "RapidCityRush", "Rapid City Rush", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TulsaOilers", "Tulsa Oilers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WichitaThunder", "Wichita Thunder", ModuleSearch::FILTER_SINGLE);