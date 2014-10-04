<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("GoTrek", "GoTrek");
ContentHashtags::create("BASEJumping", "BASE Jumping");
ContentHashtags::create("CaveDiving", "Cave Diving");
ContentHashtags::create("Freeflying", "Freeflying");
ContentHashtags::create("HangGliding", "Hang gliding");
ContentHashtags::create("Paragliding", "Paragliding");
ContentHashtags::create("Skydiving", "Skydiving");
ContentHashtags::create("WingsuitFlying", "Wingsuit Flying");
ContentHashtags::create("Fitness", "Fitness");
ContentHashtags::create("BMX", "BMX");
ContentHashtags::create("LandWindsurfing", "Land Windsurfing");
ContentHashtags::create("Motocross", "Motocross");
ContentHashtags::create("MountainBiking", "Mountain Biking");
ContentHashtags::create("MountainBoarding", "Mountain Boarding");
ContentHashtags::create("RallyRacing", "Rally Racing");
ContentHashtags::create("Sandboarding", "Sandboarding");
ContentHashtags::create("Biking", "Biking");
ContentHashtags::create("Camping", "Camping");
ContentHashtags::create("Hiking", "Hiking");
ContentHashtags::create("Hunting", "Hunting");
ContentHashtags::create("Running", "Running");
ContentHashtags::create("Climbing", "Climbing");
ContentHashtags::create("Fishing", "Fishing");
ContentHashtags::create("TrailRunning", "Trail Running");
ContentHashtags::create("Trapping", "Trapping");
ContentHashtags::create("Caving", "Caving");
ContentHashtags::create("Freeskiing", "Freeskiing");
ContentHashtags::create("IceCanoeing", "Ice Canoeing");
ContentHashtags::create("IceClimbing", "Ice Climbing");
ContentHashtags::create("Skiing", "Skiing");
ContentHashtags::create("Snowboarding", "Snowboarding");
ContentHashtags::create("Snowmobiling", "Snowmobiling");
ContentHashtags::create("Snowshoeing", "Snowshoeing");
ContentHashtags::create("Snowskating", "Snowskating");
ContentHashtags::create("FreestyleScootering", "Freestyle Scootering");
ContentHashtags::create("Longboarding", "Longboarding");
ContentHashtags::create("Paintballing", "Paintballing");
ContentHashtags::create("Parkour", "Parkour");
ContentHashtags::create("Skateboarding", "Skateboarding");
ContentHashtags::create("StreetLuging", "Street luging");
ContentHashtags::create("Xpogoing", "Xpogoing");
ContentHashtags::create("Boating", "Boating");
ContentHashtags::create("Canoeing", "Canoeing");
ContentHashtags::create("Freediving", "Freediving");
ContentHashtags::create("Kayaking", "Kayaking");
ContentHashtags::create("Kitesurfing", "Kitesurfing");
ContentHashtags::create("Rafting", "Rafting");
ContentHashtags::create("ScubaDiving", "Scuba Diving");
ContentHashtags::create("Skimboarding", "Skimboarding");
ContentHashtags::create("Surfing", "Surfing");
ContentHashtags::create("Wakeboarding", "Wakeboarding");
ContentHashtags::create("Waterskiing", "Waterskiing");
ContentHashtags::create("Waveski", "Waveski");
ContentHashtags::create("WhitewaterKayaking", "Whitewater Kayaking");
ContentHashtags::create("Windsurfing", "Windsurfing");

// Create the Site's Search Filters
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Biking", "Biking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Camping", "Camping", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Hiking", "Hiking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Hunting", "Hunting", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Running", "Running", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Boating", "Boating", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Canoeing", "Canoeing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Climbing", "Climbing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Fishing", "Fishing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Kayaking", "Kayaking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Snowshoeing", "Snowshoeing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "TrailRunning", "Trail Running", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Trapping", "Trapping", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "BMX", "BMX", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "BASEJumping", "BASE Jumping", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "CaveDiving", "Cave Diving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Caving", "Caving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Freediving", "Freediving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Freeflying", "Freeflying", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "FreestyleScootering", "Freestyle Scootering", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Freeskiing", "Freeskiing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "HangGliding", "Hang gliding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "IceClimbing", "Ice Climbing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "IceCanoeing", "Ice Canoeing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Kitesurfing", "Kitesurfing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "LandWindsurfing", "Land Windsurfing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Longboarding", "Longboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Motocross", "Motocross", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "MountainBiking", "Mountain Biking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "MountainBoarding", "Mountain Boarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Paintballing", "Paintballing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Paragliding", "Paragliding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Parkour", "Parkour", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "RallyRacing", "Rally Racing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Rafting", "Rafting", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Sandboarding", "Sandboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "ScubaDiving", "Scuba Diving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Skateboarding", "Skateboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Skydiving", "Skydiving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Skimboarding", "Skimboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Snowboarding", "Snowboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Snowmobiling", "Snowmobiling", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Snowskating", "Snowskating", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Skiing", "Skiing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "StreetLuging", "Street luging", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Surfing", "Surfing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Wakeboarding", "Wakeboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Waterskiing", "Waterskiing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Waveski", "Waveski", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "WhitewaterKayaking", "Whitewater Kayaking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Windsurfing", "Windsurfing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "WingsuitFlying", "Wingsuit Flying", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("search-home", "GoTrek Activity", "Xpogoing", "Xpogoing", ModuleSearch::FILTER_SINGLE);


// Air Sport Search Filters
ModuleSearch::createFilterOption("air-sports", "Air Sports", "BASEJumping", "BASE Jumping", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("air-sports", "Air Sports", "CaveDiving", "Cave Diving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("air-sports", "Air Sports", "Freeflying", "Freeflying", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("air-sports", "Air Sports", "HangGliding", "Hang Gliding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("air-sports", "Air Sports", "Paragliding", "Paragliding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("air-sports", "Air Sports", "Skydiving", "Skydiving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("air-sports", "Air Sports", "WingsuitFlying", "Wingsuit Flying", ModuleSearch::FILTER_SINGLE);

// Water Sport Search Filters
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Boating", "Boating", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Canoeing", "Canoeing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Kayaking", "Kayaking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Freediving", "Freediving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Kitesurfing", "Kitesurfing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Rafting", "Rafting", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "ScubaDiving", "Scuba diving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Skimboarding", "Skimboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Surfing", "Surfing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Wakeboarding", "Wakeboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Waterskiing", "Waterskiing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Waveski", "Waveski", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "WhitewaterKayaking", "Whitewater Kayaking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("water-sports", "Water Sports", "Windsurfing", "Windsurfing", ModuleSearch::FILTER_SINGLE);

// Snow Sport Search Filters
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "Freeskiing", "Freeskiing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "IceClimbing", "Ice climbing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "IceCanoeing", "Ice canoeing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "Snowboarding", "Snowboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "Snowmobiling", "Snowmobiling", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "Snowshoeing", "Snowshoeing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "Snowskating", "Snowskating", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("snow-sports", "Snow Sports", "Skiing", "Skiing", ModuleSearch::FILTER_SINGLE);

// Urban Sport Search Filters
ModuleSearch::createFilterOption("urban-sports", "Urban Sports", "FreestyleScootering", "Freestyle Scootering", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("urban-sports", "Urban Sports", "Longboarding", "Longboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("urban-sports", "Urban Sports", "Paintballing", "Paintballing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("urban-sports", "Urban Sports", "Parkour", "Parkour", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("urban-sports", "Urban Sports", "Skateboarding", "Skateboarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("urban-sports", "Urban Sports", "StreetLuging", "Street luging", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("urban-sports", "Urban Sports", "Xpogoing", "Xpogoing", ModuleSearch::FILTER_SINGLE);

// Offroad Sport Search Filters
ModuleSearch::createFilterOption("offroad-sports", "Offroad Sports", "BMX", "BMX", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("offroad-sports", "Offroad Sports", "LandWindsurfing", "Land Windsurfing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("offroad-sports", "Offroad Sports", "Motocross", "Motocross", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("offroad-sports", "Offroad Sports", "MountainBiking", "Mountain Biking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("offroad-sports", "Offroad Sports", "MountainBoarding", "Mountain Boarding", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("offroad-sports", "Offroad Sports", "RallyRacing", "Rally Racing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("offroad-sports", "Offroad Sports", "Sandboarding", "Sandboarding", ModuleSearch::FILTER_SINGLE);

// Outdoor Search Filters
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Biking", "Biking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Camping", "Camping", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Caving", "Caving", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Climbing", "Climbing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Fishing", "Fishing", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Hiking", "Hiking", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Hunting", "Hunting", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Running", "Running", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "TrailRunning", "Trail Running", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("outdoor", "Outdoor Activities", "Trapping", "Trapping", ModuleSearch::FILTER_SINGLE);
