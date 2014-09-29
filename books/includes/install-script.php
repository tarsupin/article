<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Books", "Books");
ContentHashtags::create("AwardWinningBooks", "Award Winning Books");
ContentHashtags::create("BestsellingBooks", "Best Selling Books");
ContentHashtags::create("BookBiographies", "BookBiographies");
ContentHashtags::create("BusinessBooks", "Business Books");
ContentHashtags::create("ChildrensBooks", "Children's Books");
ContentHashtags::create("Cookbooks", "Cookbooks");
ContentHashtags::create("DIYBooks", "DIY Books");
ContentHashtags::create("FantasyBooks", "Fantasy Books");
ContentHashtags::create("FictionBooks", "Fiction Books");
ContentHashtags::create("GraphicNovels", "Graphic Novels");
ContentHashtags::create("HealthAndFitnessBooks", "Health & Fitness Books");
ContentHashtags::create("HistoricalFictionBooks", "Historical Fiction Books");
ContentHashtags::create("HistoricalBooks", "Historical Books");
ContentHashtags::create("MysteryBooks", "Mystery Books");
ContentHashtags::create("NewBookReleases", "New Book Releases");
ContentHashtags::create("ReligiousBooks", "Religious Books");
ContentHashtags::create("RomanceBooks", "Romance Books");
ContentHashtags::create("SciFiBooks", "Science Fiction Books");
ContentHashtags::create("SelfImprovementBooks", "Self-Improvement Books");
ContentHashtags::create("TravelBooks", "Travel Books");

// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Genres", "BookBiographies", "Biographies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "BusinessBooks", "Business", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ChildrensBooks", "Children", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "Cookbooks", "Cookbooks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "DIYBooks", "DIY", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "FantasyBooks", "Fantasy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "FictionBooks", "Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "GraphicNovels", "Graphic Novels", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "HealthAndFitnessBooks", "Health and Fitness", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "HistoricalFictionBooks", "Historical Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "HistoricalBooks", "History", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "MysteryBooks", "Mystery", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ReligiousBooks", "Religious", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "RomanceBooks", "Romance", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SciFiBooks", "Science Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SelfImprovementBooks", "Self Improvement", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "TravelBooks", "Travel", ModuleSearch::FILTER_SINGLE);


ModuleSearch::createFilterOption("search-home", "Settings", "AwardWinningBooks", "Award Winning", ModuleSearch::FILTER_MULTI);
ModuleSearch::createFilterOption("search-home", "Settings", "BestsellingBooks", "Best Sellers", ModuleSearch::FILTER_MULTI);
