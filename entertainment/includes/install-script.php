<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Entertainment", "Entertainment");
ContentHashtags::create("Books", "Books");
ContentHashtags::create("Movies", "Movies");
ContentHashtags::create("Music", "Music");
ContentHashtags::create("Shows", "Shows");