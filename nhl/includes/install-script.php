<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("NHL", "National Hockey League");
ContentHashtags::create("NHLEasternConf", "NHL Eastern Conference");
ContentHashtags::create("BOSBruins", "Boston Bruins");
ContentHashtags::create("BUFSabres", "Buffalo Sabres");
ContentHashtags::create("CARHurricanes", "Carolina Hurricanes");
ContentHashtags::create("COLBlueJackets", "Columbus Blue Jackets");
ContentHashtags::create("DETRedWings", "Detroit Red Wings");
ContentHashtags::create("FLPanthers", "Florida Panthers");
ContentHashtags::create("MTLCanadiens", "Montreal Canadians");
ContentHashtags::create("NJDevils", "New Jersey Devils");
ContentHashtags::create("NYIslanders", "New York Islanders");
ContentHashtags::create("NYRangers", "New York Rangers");
ContentHashtags::create("OTTSenators", "Ottawa Senators");
ContentHashtags::create("PHIFlyers", "Philadelphia Flyers");
ContentHashtags::create("PITTPenguins", "Pittsburgh Penguins");
ContentHashtags::create("TBLightning", "Tampa Bay Lightning");
ContentHashtags::create("TORMapleLeafs", "Toronto Maple Leafs");
ContentHashtags::create("WASCapitals", "Washington Capitals");
ContentHashtags::create("NHLWesternConf", "NHL Western Conference");
ContentHashtags::create("ANADucks", "Anaheim Ducks");
ContentHashtags::create("AZCoyotes", "Arizona Coyotes");
ContentHashtags::create("CALFlames", "Calgary Flames");
ContentHashtags::create("CHIBlackhawks", "Chicago Blackhawks");
ContentHashtags::create("COAvalanche", "Colorado Avalanche");
ContentHashtags::create("DALStars", "Dallas Stars");
ContentHashtags::create("EDMOilers", "Edmonton Oilers");
ContentHashtags::create("LAKings", "Los Angeles Kings");
ContentHashtags::create("MNWild", "Minnesota Wild");
ContentHashtags::create("NSHPredators", "Nashville Predators");
ContentHashtags::create("SJSharks", "San Jose Sharks");
ContentHashtags::create("STLBlues", "St. Louis Blues");
ContentHashtags::create("VANCanucks", "Vancouver Canucks");
ContentHashtags::create("WPGJets", "Winnipeg Jets");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "BOSBruins", "Boston Bruins", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BUFSabres", "Buffalo Sabres", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CARHurricanes", "Carolina Hurricanes", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "COLBlueJackets", "Columbus Blue Jackets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DETRedWings", "Detroit Red Wings", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "FLPanthers", "Florida Panthers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MTLCanadiens", "Montreal Canadiens", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NJDevils", "New Jersey Devils", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NYIslanders", "New York Islanders", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NYRangers", "New York Rangers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OTTSenators", "Ottawa Senators", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PHIFlyers", "Philadelphia Flyers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PITTPenguins", "Pittsburgh Penguins", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TBLightning", "Tampa Bay Lightning", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TORMapleLeafs", "Toronto Maple Leafs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WASCapitals", "Washington Capitals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ANADucks", "Anaheim Ducks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "AZCoyotes", "Arizona Coyotes", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CALFlames", "Calgary Flames", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CHIBlackhawks", "Chicago Blackhawks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "COAvalanche", "Colorado Avalanche", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DALStars", "Dallas Stars", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "EDMOilers", "Edmonton Oilers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LAKings", "Los Angeles Kings", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MNWild", "Minnesota Wild", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NSHPredators", "Nashville Predators", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SJSharks", "San Jose Sharks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "STLBlues", "St. Louis Blues", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "VANCanucks", "Vancouver Canucks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WPGJets", "Winnipeg Jets", ModuleSearch::FILTER_SINGLE);