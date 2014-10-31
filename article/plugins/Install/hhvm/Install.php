<?hh if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Article Installation
abstract class Install extends Installation {
	
	
/****** Plugin Variables ******/
	
	// These addon plugins will be selected for installation during the "addon" installation process:
	public static array <str, bool> $addonPlugins = array(	// <str:bool>
		"Content"			=> true
	,	"ContentHashtags"	=> true
	,	"ContentComments"	=> true
	,	"ContentForm"		=> true
	,	"ContentTrack"		=> true
	,	"Feed"				=> true
	,	"ModuleAuthor"		=> true
	,	"ModuleHashtags"	=> true
	,	"ModuleImage"		=> true
	,	"ModuleRelated"		=> true
	,	"ModuleSearch"		=> true
	,	"ModuleText"		=> true
	,	"ModuleVideo"		=> true
	,	"Notifications"		=> true
	);
	
	
/****** App-Specific Installation Processes ******/
	public static function setup(
	): bool					// RETURNS <bool> TRUE on success, FALSE on failure.
	
	{
		// Load the custom installation script at {CONF_PATH}/includes/install-script.php
		require(CONF_PATH . "/includes/install-script.php");
		
		return true;
	}
}