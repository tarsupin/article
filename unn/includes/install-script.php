<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("World", "World News");
ContentHashtags::create("USA", "US News");


// Create the Site's Search Filters
/*
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "World", "World News", ModuleSearch::FILTER_SINGLE);
*/