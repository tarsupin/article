<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Prepare the Featured Widget Data
$hashtag = "Sports";
$categories = array("articles", "people", "communities");

// Create a new featured content widget
$featuredWidget = new FeaturedWidget($hashtag, $categories);

// If you want to display the FeaturedWidget by itself:
echo $featuredWidget->get();