<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("ECHL", "East Coast Hockey League");
ContentHashtags::create("ECHLEasternConf", "ECHL Eastern Conference");
ContentHashtags::create("CincinnatiCyclones", "Cincinnati Cyclones");
ContentHashtags::create("ElmiraJackals", "Elmira Jackals");
ContentHashtags::create("FloridaEverblades", "Florida Everblades");
ContentHashtags::create("GreenvilleRoadWarriors", "Greenville Road Warriors");
ContentHashtags::create("GwinnettGladiators", "Gwinnett Gladiators");
ContentHashtags::create("OrlandoSolarBears", "Orlando Solar Bears");
ContentHashtags::create("ReadingRoyals", "Reading Royals");
ContentHashtags::create("SouthCarolinaStingrays", "South Carolina Stingrays");
ContentHashtags::create("ToledoWalleye", "Toledo Walleye");
ContentHashtags::create("WheelingNailers", "Wheeling Nailers");
ContentHashtags::create("ECHLWesternConf", "ECHL Western Conference");
ContentHashtags::create("AlaskaAces", "Alaska Aces");
ContentHashtags::create("BakersfieldCondors", "Bakersfield Condors");
ContentHashtags::create("ColoradoEagles", "Colorado Eagles");
ContentHashtags::create("EvansvilleIceMen", "Evansville IceMen");
ContentHashtags::create("FortWayneKomets", "Fort Wayne Komets");
ContentHashtags::create("IdahoSteelheads", "Idaho Steelheads");
ContentHashtags::create("IndyFuel", "Indy Fuel");
ContentHashtags::create("KalamazooWings", "Kalamazoo Wings");
ContentHashtags::create("OntarioReign", "Ontario Reign");
ContentHashtags::create("StocktonThunder", "Stockton Thunder");
ContentHashtags::create("UtahGrizzlies", "Utah Grizzlies");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "CincinnatiCyclones", "Cincinnati Cyclones", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ElmiraJackals", "Elmira Jackals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "FloridaEverblades", "Florida Everblades", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GreenvilleRoadWarriors", "Greenville Road Warriors", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GwinnettGladiators", "Gwinnett Gladiators", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OrlandoSolarBears", "Orlando Solar Bears", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ReadingRoyals", "Reading Royals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SouthCarolinaStingrays", "South Carolina Stingrays", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ToledoWalleye", "Toledo Walleye", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WheelingNailers", "Wheeling Nailers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "AlaskaAces", "Alaska Aces", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BakersfieldCondors", "Bakersfield Condors", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ColoradoEagles", "Colorado Eagles", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "EvansvilleIceMen", "Evansville IceMen", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "FortWayneKomets", "Fort Wayne Komets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "IdahoSteelheads", "Idaho Steelheads", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "IndyFuel", "Indy Fuel", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "KalamazooWings", "Kalamazoo Wings", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OntarioReign", "Ontario Reign", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "StocktonThunder", "Stockton Thunder", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "UtahGrizzlies", "Utah Grizzlies", ModuleSearch::FILTER_SINGLE);