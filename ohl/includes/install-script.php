<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("OHL", "Ontario Hockey League");
ContentHashtags::create("OHLEasternConf", "OHL Eastern Conference");
ContentHashtags::create("BarrieColts", "Barrie Colts");
ContentHashtags::create("BellevillBulls", "Belleville Bulls");
ContentHashtags::create("KingstonFrontenacs", "Kingston Frontenacs");
ContentHashtags::create("MississaugaSteelheads", "Mississauga Steelheads");
ContentHashtags::create("NiagaraIceDogs", "Niagara IceDogs");
ContentHashtags::create("NorthBayBattalion", "North Bay Battalion");
ContentHashtags::create("OshawaGenerals", "Oshawa Generals");
ContentHashtags::create("Ottawa67s", "Ottawa 67's");
ContentHashtags::create("PeterboroughPetes", "Peterborough Petes");
ContentHashtags::create("SudburyWolves", "Sudbury Wolves");
ContentHashtags::create("OHLWesternConf", "OHL Western Conference");
ContentHashtags::create("ErieOttoers", "Erie Ottoers");
ContentHashtags::create("GuelphStorm", "Guelph Storm");
ContentHashtags::create("KitchenerRangers", "Kitchener Rangers");
ContentHashtags::create("LondonKnights", "London Knights");
ContentHashtags::create("OwenSoundAttack", "Owen Sound Attack");
ContentHashtags::create("PlymouthWhalers", "Plymouth Whalers");
ContentHashtags::create("SaginawSpirit", "Saginaw Spirit");
ContentHashtags::create("SarniaSting", "Sarnia Sting");
ContentHashtags::create("SaultSteMarieGreyhounds", "Sault. Ste. Marie Greyhounds");
ContentHashtags::create("WindsorSpitfires", "Windsor Spitfires");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "BarrieColts", "Barrie Colts", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "BellevillBulls", "Belleville Bulls", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "KingstonFrontenacs", "Kingston Frontenacs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MississaugaSteelheads", "Mississauga Steelheads", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NiagaraIceDogs", "Niagara IceDogs", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "NorthBayBattalion", "North Bay Battalion", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OshawaGenerals", "Oshawa Generals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "Ottawa67s", "Ottawa 67's", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PeterboroughPetes", "Peterborough Petes", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SudburyWolves", "Sudbury Wolves", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "ErieOttoers", "Erie Ottoers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "GuelphStorm", "Guelph Storm", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "KitchenerRangers", "Kitchener Rangers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LondonKnights", "London Knights", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "OwenSoundAttack", "Owen Sound Attack", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PlymouthWhalers", "Plymouth Whalers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SaginawSpirit", "Saginaw Spirit", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SarniaSting", "Sarnia Sting", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "SaultSteMarieGreyhounds", "Sault. Ste. Marie Greyhounds", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "WindsorSpitfires", "Windsor Spitfires", ModuleSearch::FILTER_SINGLE);