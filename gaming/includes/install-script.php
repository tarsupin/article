<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Gaming", "Gaming");
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


// Create the Site's Search Filters
ModuleSearch::createFilterOption("by-console", "Console", "MagnavoxOdyssey", "Magnavox Odyssey", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Odyssey100", "Odyssey 100", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Odyssey200", "Odyssey 200", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Atari2600", "Atari 2600", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "VES", "VES", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Atari7800", "Atari 7800", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "AtariXEGS", "Atari XEGS", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "NES", "NES", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "SegaMasterSystem", "Sega Master System", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "NECTurboGrafx16", "NEC TurboGrafx-16", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "SegaGenesis", "Sega Genesis", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "SNES", "SNES", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "SNKNeoGeo", "SNK Neo Geo", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "3DO", "3DO", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "AtariJaguar", "Atari Jaguar", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "NECPCFX", "NEC PC-FX", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "N64", "Nintendo 64", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Sega32X", "Sega 32X", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "SegaSaturn", "Sega Saturn", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "SonyPlaystation", "Sony Playstation", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "MicrosoftXbox", "Microsoft Xbox", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "GameCube", "Nintendo GameCube", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Dreamcast", "Sega Dreamcast", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "PS2", "Sony PlayStation 2", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Xbox360", "Microsoft Xbox 360", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "PS3", "Sony PlayStation 3", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "Wii", "Nintendo Wii", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "XboxOne", "Microsoft Xbox One", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "WiiU", "Nintento Wii U", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-console", "Console", "PS4", "Sony Playstation 4", ModuleSearch::FILTER_SINGLE);


ModuleSearch::createFilterOption("by-mobile", "Mobile Device", "Android", "Android", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-mobile", "Mobile Device", "iPad", "iPad", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-mobile", "Mobile Device", "iPhone", "iPhone", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-mobile", "Mobile Device", "Kindle", "Kindle", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-mobile", "Mobile Device", "NOOK", "NOOK", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("by-mobile", "Mobile Device", "Windows", "Windows", ModuleSearch::FILTER_SINGLE);


