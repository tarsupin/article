<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Football", "Football");
ContentHashtags::create("AFL", "Arena Football League");
ContentHashtags::create("AFLAmericanConf", "AFL American Conference");
ContentHashtags::create("CLEGladiators", "Cleveland Gladiators");
ContentHashtags::create("Barnstormers", "Iowa Barnstormers");
ContentHashtags::create("JAXSharks", "Jacksonville Sharks");
ContentHashtags::create("NOLAVooDoo", "New Orleans VooDoo");
ContentHashtags::create("ORLPredators", "Orlando Predators");
ContentHashtags::create("PHISoul", "Philadelphia Soul");
ContentHashtags::create("PITTPower", "Pittsburgh Power");
ContentHashtags::create("TBStorm", "Tampa Bay Storm");
ContentHashtags::create("AFLNationalConf", "AFL National Conference");
ContentHashtags::create("AZRattlers", "Arizona Rattlers");
ContentHashtags::create("LAKiss", "LA Kiss");
ContentHashtags::create("PORThunder", "Portland Thunder");
ContentHashtags::create("SATalons", "San Antonio Talons");
ContentHashtags::create("SJSabercats", "San Jose Sabercats");
ContentHashtags::create("SPOShock", "Spokane Shock");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "CLEGladiators", "Cleveland Gladiators", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "Barnstormers", "Iowa Barnstormers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "JAXSharks", "Jacksonville Sharks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NOLAVooDoo", "New Orleans VooDoo", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ORLPredators", "Orlando Predators", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PHISoul", "Philadelphia Soul", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PITTPower", "Pittsburgh Power", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TBStorm", "Tampa Bay Storm", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "AZRattlers", "Arizona Rattlers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LAKiss", "LA Kiss", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PORThunder", "Portland Thunder", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SATalons", "San Antonio Talons", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SJSabercats", "San Jose Sabercats", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SPOShock", "Spokane Shock", ModuleSearch::FILTER_SINGLE);