<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("SPHL", "Southern Professional Hockey League");
ContentHashtags::create("ColumbusCottonmouths", "Columbus Cottonmouths");
ContentHashtags::create("FayettevilleFireAntz", "Fayetteville FireAntz");
ContentHashtags::create("HuntsvilleHavoc", "Huntsville Havoc");
ContentHashtags::create("KnoxvilleIceBears", "Knoxville Ice Bears");
ContentHashtags::create("LouisianaIceGators", "Louisiana IceGators");
ContentHashtags::create("MississippiRiverKings", "Mississippi RiverKings");
ContentHashtags::create("PensacolaIceFlyers", "Pensacola Ice Flyers");
ContentHashtags::create("PeoriaRivermen", "Peoria Rivermen");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Teams", "ColumbusCottonmouths", "Columbus Cottonmouths", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "FayettevilleFireAntz", "Fayetteville FireAntz", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "HuntsvilleHavoc", "Huntsville Havoc", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "KnoxvilleIceBears", "Knoxville Ice Bears", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "LouisianaIceGators", "Louisiana IceGators", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "MississippiRiverKings", "Mississippi RiverKings", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PensacolaIceFlyers", "Pensacola Ice Flyers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Teams", "PeoriaRivermen", "Peoria Rivermen", ModuleSearch::FILTER_SINGLE);