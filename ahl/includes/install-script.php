<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("AHL", "American Hockey League");
ContentHashtags::create("AHLEasternConf", "AHL Eastern Conference");
ContentHashtags::create("AlbanyDevils", "Albany Devils");
ContentHashtags::create("BinghamptonSenators", "Binghampton Senators");
ContentHashtags::create("BridgeportSoundTigers", "Bridgeport Sound Tigers");
ContentHashtags::create("HartfordWolfPack", "Hartford Wolf Pack");
ContentHashtags::create("HersheyBears", "Hershey Bears");
ContentHashtags::create("LehighValleyPhantoms", "Lehigh Valley Phantoms");
ContentHashtags::create("ManchesterMonarchs", "Manchester Monarchs");
ContentHashtags::create("NorfolkAdmirals", "Norfolk Admirals");
ContentHashtags::create("PortlandPirates", "Portland Pirates");
ContentHashtags::create("ProvidenceBruins", "Providence Bruins");
ContentHashtags::create("SpringfieldFalcons", "Springfield Falcons");
ContentHashtags::create("StJohnsIceCaps", "St. John's IceCaps");
ContentHashtags::create("SyracuseCrunch", "Syracuse Crunch");
ContentHashtags::create("WBSPenguins", "Wilkes-Barre/Scranton Penguins");
ContentHashtags::create("WorcesterSharks", "Worcester Sharks");
ContentHashtags::create("AHLWesternConf", "AHL Western Conference");
ContentHashtags::create("AdirondackFlames", "Adirondack Flames");
ContentHashtags::create("CharlotteCheckers", "Charlotte Checkers");
ContentHashtags::create("ChicagoWolves", "Chicago Wolves");
ContentHashtags::create("GRGriffins", "Grand Rapids Griffins");
ContentHashtags::create("HamiltonBulldogs", "Hamilton Bulldogs");
ContentHashtags::create("IowaWild", "Iowa Wild");
ContentHashtags::create("LakeErieMonsters", "Lake Erie Monsters");
ContentHashtags::create("MilwaukeeAdmirals", "Milwaukee Admirals");
ContentHashtags::create("OKCBarons", "Oklahoma City Barons");
ContentHashtags::create("RochesterAmericans", "Rochester Americans");
ContentHashtags::create("RockfordIceHogs", "Rockford IceHogs");
ContentHashtags::create("SanAntonioRampage", "San Antonio Rampage");
ContentHashtags::create("TexasStars", "Texas Stars");
ContentHashtags::create("TorontoMarlies", "Toronto Marlies");
ContentHashtags::create("UticaComets", "Utica Comets");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "AlbanyDevils", "Albany Devils", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BinghamptonSenators", "Binghampton Senators", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BridgeportSoundTigers", "Bridgeport Sound Tigers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "HartfordWolfPack", "Hartford Wolf Pack", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "HersheyBears", "Hershey Bears", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LehighValleyPhantoms", "Lehigh Valley Phantoms", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ManchesterMonarchs", "Manchester Monarchs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NorfolkAdmirals", "Norfolk Admirals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PortlandPirates", "Portland Pirates", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ProvidenceBruins", "Providence Bruins", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SpringfieldFalcons", "Springfield Falcons", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "StJohnsIceCaps", "St. John's IceCaps", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SyracuseCrunch", "Syracuse Crunch", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WBSPenguins", "Wilkes-Barre/Scranton Penguins", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WorcesterSharks", "Worcester Sharks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "AdirondackFlames", "Adirondack Flames", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "CharlotteCheckers", "Charlotte Checkers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ChicagoWolves", "Chicago Wolves", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GRGriffins", "Grand Rapids Griffins", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "HamiltonBulldogs", "Hamilton Bulldogs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "IowaWild", "Iowa Wild", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LakeErieMonsters", "Lake Erie Monsters", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MilwaukeeAdmirals", "Milwaukee Admirals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OKCBarons", "Oklahoma City Barons", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "RochesterAmericans", "Rochester Americans", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "RockfordIceHogs", "Rockford IceHogs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SanAntonioRampage", "San Antonio Rampage", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TexasStars", "Texas Stars", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "TorontoMarlies", "Toronto Marlies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "UticaComets", "Utica Comets", ModuleSearch::FILTER_SINGLE);