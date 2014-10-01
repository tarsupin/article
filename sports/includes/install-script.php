<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Sports", "Sports");
ContentHashtags::create("Baseball", "Baseball");
ContentHashtags::create("Basketball", "Basketball");
ContentHashtags::create("Cricket", "Cricket");
ContentHashtags::create("Football", "Football");
ContentHashtags::create("Golf", "Golf");
ContentHashtags::create("Hockey", "Hockey");
ContentHashtags::create("LaCrosse", "LaCrosse");
ContentHashtags::create("Motorsports", "Motorsports");
ContentHashtags::create("Rugby", "Rugby");
ContentHashtags::create("Soccer", "Soccer");
ContentHashtags::create("Tennis", "Tennis");