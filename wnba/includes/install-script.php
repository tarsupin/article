<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Basketball", "Basketball");
ContentHashtags::create("WNBA", "Women's National Basketball Association");
ContentHashtags::create("WNBAEasternConf", "WNBA Eastern Conference");
ContentHashtags::create("ATLDream", "Atlanta Dream");
ContentHashtags::create("CHISky", "Chicago Sky");
ContentHashtags::create("INDFever", "Indiana Fever");
ContentHashtags::create("NYLiberty", "New York Liberty");
ContentHashtags::create("WASMystics", "Washington Mystics");
ContentHashtags::create("WNBAWesternConf", "WNBA Western Conference");
ContentHashtags::create("LASparks", "Los Angeles Sparks");
ContentHashtags::create("MNLynx", "Minnesota Lynx");
ContentHashtags::create("PHXMercury", "Phoenix Mercury");
ContentHashtags::create("SAStars", "San Antonio Stars");
ContentHashtags::create("SEAStrom", "Seattle Storm");
ContentHashtags::create("TULShock", "Tulsa Shock");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "ATLDream", "Atlanta Dream", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CHISky", "Chicago Sky", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "INDFever", "Indiana Fever", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NYLiberty", "New York Liberty", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WASMystics", "Washington Mystics", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LASparks", "Los Angeles Sparks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MNLynx", "Minnesota Lynx", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PHXMercury", "Phoenix Mercury", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SAStars", "San Antonio Stars", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SEAStrom", "Seattle Storm", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TULShock", "Tulsa Shock", ModuleSearch::FILTER_SINGLE);