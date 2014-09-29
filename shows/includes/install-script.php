<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Shows", "Shows");
ContentHashtags::create("ActionAdventureShows", "Action & Adventure Shows");
ContentHashtags::create("AnimatedShows", "Animated Shows");
ContentHashtags::create("AnimeShows", "Anime Shows");
ContentHashtags::create("ArtCultureShows", "Art & Culture Shows");
ContentHashtags::create("CartoonsShows", "Cartoons Shows");
ContentHashtags::create("ClassicShows", "Classic Shows");
ContentHashtags::create("ComedyShows", "Comedy Shows");
ContentHashtags::create("DocumentaryShows", "Documentary Shows");
ContentHashtags::create("DramaShows", "Drama Shows");
ContentHashtags::create("FamilyShows", "Family Shows");
ContentHashtags::create("FoodShows", "Food Shows");
ContentHashtags::create("GameShows", "Game Shows");
ContentHashtags::create("HealthWellnessShows", "Health & Wellness Shows");
ContentHashtags::create("HorrorShows", "Horror Shows");
ContentHashtags::create("KidsShows", "Kids' Shows");
ContentHashtags::create("KoreanDramaShows", "Korean Drama Shows");
ContentHashtags::create("LatinoShows", "Latino Shows");
ContentHashtags::create("LifestyleShows", "Lifestyle Shows");
ContentHashtags::create("MusicShows", "Music Shows");
ContentHashtags::create("NewsShows", "News Shows");
ContentHashtags::create("RealityShows", "Reality Shows");
ContentHashtags::create("ReligiousShows", "Religious Shows");
ContentHashtags::create("SciFiShows", "Science Fiction Shows");
ContentHashtags::create("Sitcoms", "Sitcom Shows");
ContentHashtags::create("SoapOperas", "Soap Operas");
ContentHashtags::create("SportsShows", "Sports Shows");
ContentHashtags::create("SuspenseShows", "Suspense Shows");
ContentHashtags::create("TechShows", "Technology Shows");
ContentHashtags::create("TravelShows", "Travel Shows");
ContentHashtags::create("WeatherShows", "Weather Shows");

// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Genres", "ActionAdventureShows", "Action & Adventure", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "AnimatedShows", "Animated", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "AnimeShows", "Anime", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ArtCultureShows", "Art & Culture", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "CartoonsShows", "Cartoons", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ClassicShows", "Classics", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ComedyShows", "Comedy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "DocumentaryShows", "Documentary", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "DramaShows", "Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "FamilyShows", "Family", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "FoodShows", "Food", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "GameShows", "Game Shows", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "HealthWellnessShows", "Health & Wellness", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "HorrorShows", "Horror", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "KidsShows", "Kid Shows", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "KoreanDramaShows", "Korean Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "LatinoShows", "Latino", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "LifestyleShows", "Lifestyle", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "MusicShows", "Music", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "NewsShows", "News", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "RealityShows", "Reality TV", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ReligiousShows", "Religious", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SciFiShows", "SciFi", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "Sitcoms", "Sitcoms", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SoapOperas", "Soap Operas", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SportsShows", "Sports", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SuspenseShows", "Suspense", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "TechShows", "Tech", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "TravelShows", "Travel", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "WeatherShows", "Weather", ModuleSearch::FILTER_SINGLE);

