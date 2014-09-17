<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

class ScrapeDataAPI_config {
	
	
/****** Plugin Variables ******/
	public $pluginType = "api";
	public $pluginName = "ScrapeDataAPI";
	public $title = "Article Scraping API";
	public $version = 1.0;
	public $author = "Brint Paris";
	public $license = "UniFaction License";
	public $website = "http://unifaction.com";
	public $description = "Allows the UniFaction home page to scrape article data.";
	
	public $data = array();
	
}