<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Entertainment", "Entertainment");
ContentHashtags::create("Books", "Books");
ContentHashtags::create("Gaming", "Gaming");
ContentHashtags::create("Movies", "Movies");
ContentHashtags::create("Music", "Music");
ContentHashtags::create("Shows", "Shows");

// Books Official Hashtags
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

// Books Search Filters
ModuleSearch::createFilterOption("books-home", "Genres", "BookBiographies", "Biographies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "BusinessBooks", "Business", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "ChildrensBooks", "Children", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "Cookbooks", "Cookbooks", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "DIYBooks", "DIY", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "FantasyBooks", "Fantasy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "FictionBooks", "Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "GraphicNovels", "Graphic Novels", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "HealthAndFitnessBooks", "Health and Fitness", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "HistoricalFictionBooks", "Historical Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "HistoricalBooks", "History", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "MysteryBooks", "Mystery", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "ReligiousBooks", "Religious", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "RomanceBooks", "Romance", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "SciFiBooks", "Science Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "SelfImprovementBooks", "Self Improvement", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("books-home", "Genres", "TravelBooks", "Travel", ModuleSearch::FILTER_SINGLE);

ModuleSearch::createFilterOption("books-home", "Settings", "AwardWinningBooks", "Award Winning", ModuleSearch::FILTER_MULTI);
ModuleSearch::createFilterOption("books-home", "Settings", "BestsellingBooks", "Best Sellers", ModuleSearch::FILTER_MULTI);

// Movies Official Hashtags
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

// Movies Search Filters
ModuleSearch::createFilterOption("movies-home", "Genres", "ActionMovies", "Action", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "AdventureMovies", "Adventure", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "AnimationMovies", "Animated", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "MovieBiographies", "Biographies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "ChildrensMovies", "Children", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "ComedyMovies", "Comedies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "CrimeDramaMovies", "Crime Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "DocumentaryMovies", "Documentaries", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "DramaMovies", "Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "FamilyMovies", "Family", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "FantasyMovies", "Fantasy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "FilmNoir", "Film-Noir", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "HistoricalMovies", "Historical", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "HorrorMovies", "Horror", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "IndieMovies", "Indie", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "MusicMovies", "Music", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "MusicalMovies", "Musicals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "MysteryMovies", "Mystery", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "RomanceMovies", "Romance", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "RomComMovies", "Romantic Comedies", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "SciFiMovies", "Science Fiction", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "SportsMovies", "Sports", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "ThrillerMovies", "Thrillers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "WarMovies", "War", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("movies-home", "Genres", "WesternMovies", "Westerns", ModuleSearch::FILTER_SINGLE);

// Music Official Hashtags
ContentHashtags::create("BluegrassMusic", "Bluegrass Music");
ContentHashtags::create("BluesMusic", "Blues Music");
ContentHashtags::create("ChristianMusic", "Christian Music");
ContentHashtags::create("ClassicalMusic", "Classical Music");
ContentHashtags::create("ComedyAudio", "Comedy Audio");
ContentHashtags::create("CountryMusic", "Country Music");
ContentHashtags::create("DanceMusic", "Dance (EDM) Music");
ContentHashtags::create("EasyListening", "Easy Listening");
ContentHashtags::create("ElectronicMusic", "Electronic Music");
ContentHashtags::create("FolkMusic", "Folk Music");
ContentHashtags::create("GospelMusic", "Gospel Music");
ContentHashtags::create("HardRockMusic", "Hard Rock Music");
ContentHashtags::create("HipHopMusic", "Hip-Hop Music");
ContentHashtags::create("HolidayMusic", "Holiday Music");
ContentHashtags::create("IndieMusic", "Indie Music");
ContentHashtags::create("InstrumentalMusic", "Instrumental Music");
ContentHashtags::create("JazzMusic", "Jazz Music");
ContentHashtags::create("LatinoMusic", "Latino Music");
ContentHashtags::create("MetalMusic", "Metal Music");
ContentHashtags::create("MusicalsMusic", "Musicals Music");
ContentHashtags::create("NewWaveMusic", "New Wave Music");
ContentHashtags::create("PopMusic", "Pop Music");
ContentHashtags::create("PunkMusic", "Punk Music");
ContentHashtags::create("RBMusic", "R&B Music");
ContentHashtags::create("RapMusic", "Rap Music");
ContentHashtags::create("ReggaeMusic", "Reggae Music");
ContentHashtags::create("RockNRollMusic", "Rock & Rol lMusic");
ContentHashtags::create("SongwriterMusic", "Singer/Songwriter Music");
ContentHashtags::create("SoulMusic", "Soul Music");
ContentHashtags::create("SountrackMusic", "Sountrack Music");
ContentHashtags::create("VocalMusic", "Vocal Music");

// Music Search Filters
ModuleSearch::createFilterOption("music-home", "Genres", "BluegrassMusic", "Bluegrass", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "BluesMusic", "Blues", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "ChristianMusic", "Christian", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "ClassicalMusic", "Classical", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "ComedyAudio", "Comedy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "CountryMusic", "Country", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "DanceMusic", "Dance", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "EasyListening", "Easy Listening", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "ElectronicMusic", "Electronic", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "FolkMusic", "Folk", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "GospelMusic", "Gospel", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "HardRockMusic", "Hard Rock", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "HipHopMusic", "Hip Hop", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "HolidayMusic", "Holiday", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "IndieMusic", "Indie", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "InstrumentalMusic", "Instrumental", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "JazzMusic", "Jazz", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "LatinoMusic", "Latino", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "MetalMusic", "Metal", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "MusicalsMusic", "Musicals", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "NewWaveMusic", "New Wave", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "PopMusic", "Pop", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "PunkMusic", "Punk", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "RBMusic", "R&B", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "RapMusic", "Rap", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "ReggaeMusic", "Reggae", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "RockNRollMusic", "Rock & Roll", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "SongwriterMusic", "Singer/Songwriter", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "SoulMusic", "Soul", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "SountrackMusic", "Soundtrack", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("music-home", "Genres", "VocalMusic", "Vocal", ModuleSearch::FILTER_SINGLE);

// Shows Official Hashtags
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

// Shows Search Filters
ModuleSearch::createFilterOption("shows-home", "Genres", "ActionAdventureShows", "Action & Adventure", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "AnimatedShows", "Animated", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "AnimeShows", "Anime", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "ArtCultureShows", "Art & Culture", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "CartoonsShows", "Cartoons", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "ClassicShows", "Classics", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "ComedyShows", "Comedy", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "DocumentaryShows", "Documentary", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "DramaShows", "Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "FamilyShows", "Family", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "FoodShows", "Food", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "GameShows", "Game Shows", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "HealthWellnessShows", "Health & Wellness", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "HorrorShows", "Horror", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "KidsShows", "Kid Shows", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "KoreanDramaShows", "Korean Drama", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "LatinoShows", "Latino", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "LifestyleShows", "Lifestyle", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "MusicShows", "Music", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "NewsShows", "News", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "RealityShows", "Reality TV", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "ReligiousShows", "Religious", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "SciFiShows", "SciFi", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "Sitcoms", "Sitcoms", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "SoapOperas", "Soap Operas", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "SportsShows", "Sports", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "SuspenseShows", "Suspense", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "TechShows", "Tech", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "TravelShows", "Travel", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("shows-home", "Genres", "WeatherShows", "Weather", ModuleSearch::FILTER_SINGLE);

// Console Type Official Hashtags
ContentHashtags::create("GamingEvents", "Gaming Events");
ContentHashtags::create("E3", "Electronic Entertainment Expo");
ContentHashtags::create("GamingReviews", "Gaming Reviews");
ContentHashtags::create("ConsoleGaming", "Console Gaming");
ContentHashtags::create("SeventhGenConsoles", "Seventh Generation");
ContentHashtags::create("Xbox360", "Microsoft Xbox 360");
ContentHashtags::create("PS3", "Sony PlayStation 3");
ContentHashtags::create("Wii", "Nintendo Wii");
ContentHashtags::create("EighthGen", "Eighth Generation");
ContentHashtags::create("XboxOne", "Microsoft Xbox One");
ContentHashtags::create("WiiU", "Nintento Wii U");
ContentHashtags::create("PS4", "Sony Playstation 4");
ContentHashtags::create("MobileGaming", "Mobile Gaming");
ContentHashtags::create("Android", "Android");
ContentHashtags::create("iPad", "iPad");
ContentHashtags::create("iPhone", "iPhone");
ContentHashtags::create("Kindle", "Kindle");
ContentHashtags::create("NOOK", "NOOK");
ContentHashtags::create("Windows", "Windows");
ContentHashtags::create("HandheldGaming", "Handheld Gaming");
ContentHashtags::create("PSVita", "PlayStation Vita");
ContentHashtags::create("NintendoDS", "Nintendo DS");
ContentHashtags::create("OnlineGaming", "Online Gaming");
ContentHashtags::create("PCGaming", "PC Gaming");
ContentHashtags::create("RetroGaming", "Retro Gaming");
ContentHashtags::create("RetroPCGaming", "Retro PC Gaming");
ContentHashtags::create("FirstGenConsoles", "First Generation");
ContentHashtags::create("MagnavoxOdyssey", "Magnavox Odyssey");
ContentHashtags::create("Odyssey100", "Odyssey 100");
ContentHashtags::create("Odyssey200", "Odyssey 200");
ContentHashtags::create("SecondGenConsoles", "Second Generation");
ContentHashtags::create("Atari2600", "Atari 2600");
ContentHashtags::create("VES", "VES");
ContentHashtags::create("ThirdGenConsoles", "Third Generation");
ContentHashtags::create("Atari7800", "Atari 7800");
ContentHashtags::create("AtariXEGS", "Atari XEGS");
ContentHashtags::create("NES", "NES");
ContentHashtags::create("SegaMasterSystem", "Sega Master System");
ContentHashtags::create("FourthGenConsoles", "Fourth Generation");
ContentHashtags::create("NECTurboGrafx16", "NEC TurboGrafx-16");
ContentHashtags::create("SegaGenesis", "Sega Genesis");
ContentHashtags::create("SNES", "SNES");
ContentHashtags::create("SNKNeoGeo", "SNK Neo Geo");
ContentHashtags::create("FifthGenConsoles", "Fifth Generation");
ContentHashtags::create("3DO", "3DO");
ContentHashtags::create("AtariJaguar", "Atari Jaguar");
ContentHashtags::create("NECPCFX", "NEC PC-FX");
ContentHashtags::create("N64", "Nintendo 64");
ContentHashtags::create("Sega32X", "Sega 32X");
ContentHashtags::create("SegaSaturn", "Sega Saturn");
ContentHashtags::create("SonyPlaystation", "Sony Playstation");
ContentHashtags::create("SixthGenConsoles", "Sixth Generation");
ContentHashtags::create("MicrosoftXbox", "Microsoft Xbox");
ContentHashtags::create("GameCube", "Nintendo GameCube");
ContentHashtags::create("Dreamcast", "Sega Dreamcast");
ContentHashtags::create("PS2", "Sony PlayStation 2");

// Console Type Search Filters
ModuleSearch::createFilterOption("console-type", "Console", "MagnavoxOdyssey", "Magnavox Odyssey", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Odyssey100", "Odyssey 100", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Odyssey200", "Odyssey 200", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Atari2600", "Atari 2600", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "VES", "VES", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Atari7800", "Atari 7800", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "AtariXEGS", "Atari XEGS", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "NES", "NES", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "SegaMasterSystem", "Sega Master System", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "NECTurboGrafx16", "NEC TurboGrafx-16", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "SegaGenesis", "Sega Genesis", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "SNES", "SNES", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "SNKNeoGeo", "SNK Neo Geo", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "3DO", "3DO", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "AtariJaguar", "Atari Jaguar", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "NECPCFX", "NEC PC-FX", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "N64", "Nintendo 64", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Sega32X", "Sega 32X", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "SegaSaturn", "Sega Saturn", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "SonyPlaystation", "Sony Playstation", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "MicrosoftXbox", "Microsoft Xbox", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "GameCube", "Nintendo GameCube", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Dreamcast", "Sega Dreamcast", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "PS2", "Sony PlayStation 2", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Xbox360", "Microsoft Xbox 360", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "PS3", "Sony PlayStation 3", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "Wii", "Nintendo Wii", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "XboxOne", "Microsoft Xbox One", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "WiiU", "Nintento Wii U", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("console-type", "Console", "PS4", "Sony Playstation 4", ModuleSearch::FILTER_SINGLE);

ModuleSearch::createFilterOption("gaming-mobile-device", "Mobile Device", "Android", "Android", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("gaming-mobile-device", "Mobile Device", "iPad", "iPad", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("gaming-mobile-device", "Mobile Device", "iPhone", "iPhone", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("gaming-mobile-device", "Mobile Device", "Kindle", "Kindle", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("gaming-mobile-device", "Mobile Device", "NOOK", "NOOK", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("gaming-mobile-device", "Mobile Device", "Windows", "Windows", ModuleSearch::FILTER_SINGLE);
