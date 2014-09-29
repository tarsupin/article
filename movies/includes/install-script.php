<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Movies", "Movies");
ContentHashtags::create("ActionMovies", "Action Movies");
ContentHashtags::create("AdventureMovies", "Adventure Movies");
ContentHashtags::create("AnimatedMovies", "Animated Movies");
ContentHashtags::create("MovieBiographies", "MovieBiographies");
ContentHashtags::create("ChildrensMovies", "Children's Movies");
ContentHashtags::create("ComedyMovies", "Comedy Movies");
ContentHashtags::create("CrimeDramaMovies", "Crime Drama Movies");
ContentHashtags::create("DocumentaryMovies", "Documentaries");
ContentHashtags::create("DramaMovies", "Drama Movies");
ContentHashtags::create("FamilyMovies", "Family Movies");
ContentHashtags::create("FantasyMovies", "Fantasy Movies");
ContentHashtags::create("FilmNoir", "Film-Noir");
ContentHashtags::create("HistoricalMovies", "Historical Movies");
ContentHashtags::create("HorrorMovies", "Horror Movies");
ContentHashtags::create("IndieMovies", "Independent Movies");
ContentHashtags::create("MusicMovies", "Music Movies");
ContentHashtags::create("MusicalMovies", "Musical Movies");
ContentHashtags::create("MysteryMovies", "Mystery Movies");
ContentHashtags::create("NewMovieReleases", "New Movie Releasese");
ContentHashtags::create("RomanceMovies", "Romance Movies");
ContentHashtags::create("RomComMovies", "Romantic Comedy Movies");
ContentHashtags::create("SciFiMovies", "Sci-Fi Movies");
ContentHashtags::create("SportsMovies", "Sports Movies");
ContentHashtags::create("ThrillerMovies", "Thriller Movies");
ContentHashtags::create("WarMovies", "War Movies");
ContentHashtags::create("WesternMovies", "Western Movies");

// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "Genres", "ActionMovies", "Action", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "AdventureMovies", "Adventure", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "AnimationMovies", "Animated", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "MovieBiographies", "Biographies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ChildrensMovies", "Children", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ComedyMovies", "Comedies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "CrimeDramaMovies", "Crime Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "DocumentaryMovies", "Documentaries", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "DramaMovies", "Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "FamilyMovies", "Family", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "FantasyMovies", "Fantasy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "FilmNoir", "Film-Noir", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "HistoricalMovies", "Historical", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "HorrorMovies", "Horror", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "IndieMovies", "Indie", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "MusicMovies", "Music", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "MusicalMovies", "Musicals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "MysteryMovies", "Mystery", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "RomanceMovies", "Romance", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "RomComMovies", "Romantic Comedies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SciFiMovies", "Science Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "SportsMovies", "Sports", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "ThrillerMovies", "Thrillers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "WarMovies", "War", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "Genres", "WesternMovies", "Westerns", ModuleSearch::FILTER_SINGLE);