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
ContentHashtags::create("Health", "Health");
ContentHashtags::create("Math", "Math");
ContentHashtags::create("Medical", "Medical");
ContentHashtags::create("Physics", "Physics");
ContentHashtags::create("SocialSciences", "Social Sciences");
