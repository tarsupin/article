<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Golf", "Golf");
ContentHashtags::create("PGA", "Professional Golf Association");
ContentHashtags::create("WPGA", "Women's Professional Golf Association");


// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "League", "Golf", "Golf", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "League", "PGA", "PGA", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "League", "WPGA", "WPGA", ModuleSearch::FILTER_SINGLE);