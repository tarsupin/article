<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Science", "Science");
ContentHashtags::create("Astronomy", "Astronomy");
ContentHashtags::create("Biology", "Biology");
ContentHashtags::create("Chemistry", "Chemistry");
ContentHashtags::create("EarthSciences", "Earth Sciences");
ContentHashtags::create("Engineering", "Engineering");
ContentHashtags::create("Geology", "Geology");
ContentHashtags::create("GreenScience", "Green Science");
ContentHashtags::create("Math", "Math");
ContentHashtags::create("Medical", "Medical");
ContentHashtags::create("Physics", "Physics");
ContentHashtags::create("SocialSciences", "Social Sciences");


// Create the Site's Search Filters
/*
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Science", "Science", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Astronomy", "Astronomy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Biology", "Biology", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Chemistry", "Chemistry", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "EarthSciences", "Earth Sciences", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Engineering", "Engineering", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Geology", "Geology", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "GreenScience", "Green Science", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Math", "Math", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Medical", "Medical", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "Physics", "Physics", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "FILTER_NAME", "SocialSciences", "Social Sciences", ModuleSearch::FILTER_SINGLE);
*/