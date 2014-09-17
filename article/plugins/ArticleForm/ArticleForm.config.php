<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

class ArticleForm_config {
	
	
/****** Plugin Variables ******/
	public $pluginType = "standard";
	public $pluginName = "ArticleForm";
	public $title = "Article Form";
	public $version = 1.0;
	public $author = "Brint Paris";
	public $license = "UniFaction License";
	public $website = "http://unifaction.com";
	public $description = "A modification to the content form for the article system.";
	
	public $data = array();
	
	
/****** Install this plugin ******/
	public function install (
	)			// <bool> RETURNS TRUE on success, FALSE on failure.
	
	// $plugin->install();
	{
		DatabaseAdmin::addColumn("content_entries", "feed_id", "int(10) unsigned not null", 0);
		
		return $this->isInstalled();
	}
	
	
/****** Check if the plugin was successfully installed ******/
	public static function isInstalled (
	)			// <bool> TRUE if successfully installed, FALSE if not.
	
	// $plugin->isInstalled();
	{
		// Make sure the newly installed tables exist
		return DatabaseAdmin::columnsExist("content_entries", array("feed_id"));
	}
	
}