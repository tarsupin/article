<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Tech", "Technology");
ContentHashtags::create("Hardware", "Hardware");
ContentHashtags::create("Software", "Software");
ContentHashtags::create("TechEvents", "Tech Events");
ContentHashtags::create("Gadgets", "Gadgets");
ContentHashtags::create("Mobile", "Mobile");
ContentHashtags::create("RetroTech", "Reto Tech");
ContentHashtags::create("Startups", "Startups");
ContentHashtags::create("TechBusiness", "Tech Business");
ContentHashtags::create("TechNews", "Tech News");


// Create the Site's Search Filters
/*
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Computer", "Computer", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Software", "Software", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "TechEvents", "Tech Events", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Gadgets", "Gadgets", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Mobile", "Mobile", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "RetroTech", "Reto Tech", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Startups", "Startups", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "TechBusiness", "Tech Business", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "TechNews", "Tech News", ModuleSearch::FILTER_SINGLE);
*/