<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Basketball", "Basketball");
ContentHashtags::create("NBA", "National Basketball Association");
ContentHashtags::create("NBAEasternConf", "NBA Eastern Conference");
ContentHashtags::create("ATLHawks", "Atlanta Hawks");
ContentHashtags::create("BOSCeltics", "Boston Celtics");
ContentHashtags::create("BKYNets", "Brooklyn Nets");
ContentHashtags::create("CHAHornets", "Charlotte Hornets");
ContentHashtags::create("CHIBulls", "Chicago Bulls");
ContentHashtags::create("CLECavaliers", "Cleveland Cavaliers");
ContentHashtags::create("DETPistons", "Detroit Pistons");
ContentHashtags::create("INDPacers", "Indiana Pacers");
ContentHashtags::create("MIAHeat", "Miami Heat");
ContentHashtags::create("MKEBucks", "Milwaukee Bucks");
ContentHashtags::create("NYKnicks", "New York Knicks");
ContentHashtags::create("ORLMagic", "Orlando Magic");
ContentHashtags::create("PHI76ers", "Philadelphia 76ers");
ContentHashtags::create("TORRaptors", "Toronto Raptors");
ContentHashtags::create("WASWizards", "Washington Wizards");
ContentHashtags::create("NBAWesternConf", "NBA Western Conference");
ContentHashtags::create("DALMavericks", "Dallas Mavericks");
ContentHashtags::create("DENNuggets", "Denver Nuggets");
ContentHashtags::create("GSWarriors", "Golden State Warriors");
ContentHashtags::create("HOURockets", "Houston Rockets");
ContentHashtags::create("LAClippers", "Los Angeles Clippers");
ContentHashtags::create("LALakers", "Los Angeles Lakers");
ContentHashtags::create("MEMGrizzlies", "Memphis Grizzlies");
ContentHashtags::create("MNTimberwolves", "Minnesota Timberwolves");
ContentHashtags::create("NOLAPelicans", "New Orleans Pelicans");
ContentHashtags::create("OKCThunder", "Oklahoma City Thumder");
ContentHashtags::create("PHXSuns", "Phoenix Suns");
ContentHashtags::create("PORTrailblazers", "Portland Trailblazers");
ContentHashtags::create("SACKings", "Sacramento Kings");
ContentHashtags::create("SASpurs", "San Antonio Spurs");
ContentHashtags::create("UTJazz", "Utah Jazz");

// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "ATLHawks", "Atlanta Hawks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BOSCeltics", "Boston Celtics", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BKYNets", "Brooklyn Nets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CHAHornets", "Charlotte Hornets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CHIBulls", "Chicago Bulls", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CLECavaliers", "Cleveland Cavaliers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DETPistons", "Detroit Pistons", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "INDPacers", "Indiana Pacers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MIAHeat", "Miami Heat", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MKEBucks", "Milwaukee Bucks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NYKnicks", "New York Knicks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ORLMagic", "Orlando Magic", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PHI76ers", "Philadelphia 76ers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TORRaptors", "Toronto Raptors", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WASWizards", "Washington Wizards", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DALMavericks", "Dallas Mavericks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "DENNuggets", "Denver Nuggets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GSWarriors", "Golden State Warriors", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "HOURockets", "Houston Rockets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LAClippers", "Los Angeles Clippers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LALakers", "Los Angeles Lakers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MEMGrizzlies", "Memphis Grizzlies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MNTimberwolves", "Minnesota Timberwolves", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NOLAPelicans", "New Orleans Pelicans", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OKCThunder", "Oklahoma City Thumder", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PHXSuns", "Phoenix Suns", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PORTrailblazers", "Portland Trailblazers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SACKings", "Sacramento Kings", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SASpurs", "San Antonio Spurs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "UTJazz", "Utah Jazz", ModuleSearch::FILTER_SINGLE);