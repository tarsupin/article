<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Design4", "Design4");
ContentHashtags::create("Architecture", "Architecture");
ContentHashtags::create("InteriorDesign", "Interior Design");
ContentHashtags::create("Lighting", "Lighting");
ContentHashtags::create("Furniture", "Furniture");
ContentHashtags::create("HomeArt", "Home Art");
ContentHashtags::create("Decor", "Decor");
ContentHashtags::create("DIY", "DIY");