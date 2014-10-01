<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

class TrackerAPI_config {
	
	
/****** Plugin Variables ******/
	public $pluginType = "api";
	public $pluginName = "TrackerAPI";
	public $title = "Tracker API";
	public $version = 1.0;
	public $author = "Brint Paris";
	public $license = "UniFaction License";
	public $website = "http://unifaction.com";
	public $description = "Allows other sites (primarily aggregate sites) to run the tracker for the original site.";
	
	public $data = array();
	
}