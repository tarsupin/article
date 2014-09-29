<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Baseball", "Baseball");
ContentHashtags::create("MLB", "Major League Baseball");
ContentHashtags::create("AmericanLeague", "American League");
ContentHashtags::create("BALOrioles", "Baltimore Orioles");
ContentHashtags::create("RedSox", "Boston Red Sox");
ContentHashtags::create("WhiteSox", "Chicago White Sox");
ContentHashtags::create("ClevelandIndians", "Cleveland Indians");
ContentHashtags::create("DetroitTigers", "Detroit Tigers");
ContentHashtags::create("HOUAstros", "Houston Astros");
ContentHashtags::create("KCRoyals", "Kansas City Royals");
ContentHashtags::create("LAAngels", "Los Angeles Angels");
ContentHashtags::create("MNTwins", "Minnesota Twins");
ContentHashtags::create("NYYankees", "New York Yankees");
ContentHashtags::create("OAKAthletics", "Oakland Athletics");
ContentHashtags::create("SeattleMariners", "Seattle Mariners");
ContentHashtags::create("TBRays", "Tampa Bay Rays");
ContentHashtags::create("TXRangers", "Texas Rangers");
ContentHashtags::create("TORBlueJays", "Toronto Blue Jays");
ContentHashtags::create("NationalLeague", "National League");
ContentHashtags::create("AZDiamondbacks", "Arizona Diamondbacks");
ContentHashtags::create("ATLBraves", "Atlanta Braves");
ContentHashtags::create("ChicagoCubs", "Chicago Cubs");
ContentHashtags::create("CINReds", "Cincinnati Reds");
ContentHashtags::create("CORockies", "Colorado Rockies");
ContentHashtags::create("LADodgers", "Los Angeles Dodgers");
ContentHashtags::create("MiamiMarlins", "Miami Marlins");
ContentHashtags::create("MKEBrewers", "Milwaukee Brewers");
ContentHashtags::create("NYMets", "New York Mets");
ContentHashtags::create("PHIPhillies", "Philadelphia Phillies");
ContentHashtags::create("PITTPirates", "Pittsburgh Pirates");
ContentHashtags::create("SDPadres", "San Diego Padres");
ContentHashtags::create("SFGiants", "San Francisco Giants");
ContentHashtags::create("STLCardinals", "St. Louis Cardinals");
ContentHashtags::create("WASNationals", "Washington Nationals");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "BALOrioles", "Baltimore Orioles", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "RedSox", "Boston Red Sox", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WhiteSox", "Chicago White Sox", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ClevelandIndians", "Cleveland Indians", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DetroitTigers", "Detroit Tigers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "HOUAstros", "Houston Astros", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "KCRoyals", "Kansas City Royals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LAAngels", "Los Angeles Angels", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MNTwins", "Minnesota Twins", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NYYankees", "New York Yankees", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OAKAthletics", "Oakland Athletics", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SeattleMariners", "Seattle Mariners", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TBRays", "Tampa Bay Rays", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TXRangers", "Texas Rangers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TORBlueJays", "Toronto Blue Jays", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "AZDiamondbacks", "Arizona Diamondbacks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ATLBraves", "Atlanta Braves", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ChicagoCubs", "Chicago Cubs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CINReds", "Cincinnati Reds", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CORockies", "Colorado Rockies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LADodgers", "Los Angeles Dodgers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MiamiMarlins", "Miami Marlins", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MKEBrewers", "Milwaukee Brewers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NYMets", "New York Mets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PHIPhillies", "Philadelphia Phillies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PITTPirates", "Pittsburgh Pirates", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SDPadres", "San Diego Padres", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SFGiants", "San Francisco Giants", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "STLCardinals", "St. Louis Cardinals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WASNationals", "Washington Nationals", ModuleSearch::FILTER_SINGLE);