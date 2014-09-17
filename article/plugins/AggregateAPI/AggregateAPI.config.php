<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

class AggregateAPI_config {
	
	
/****** Plugin Variables ******/
	public $pluginType = "api";
	public $pluginName = "AggregateAPI";
	public $title = "Aggregation API";
	public $version = 1.0;
	public $author = "Brint Paris";
	public $license = "UniFaction License";
	public $website = "http://unifaction.com";
	public $description = "Allows aggregate sites to pull data from article sites.";
	
	public $data = array();
	
}