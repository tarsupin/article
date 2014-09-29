<?php

/*
	This config.php file should be located at /{application}/config.php. This file ONLY affects configurations for the
	application that it is stored in. If you want to change configurations across your entire server, you need to edit
	the /global-config.php file one level up.
	
	If you have different configurations that apply	depending on which environment you're currently using (such as your
	localhost environment vs. your production environment), you can set those configurations in the corresponding
	"local" and "production" sections.
	
	You can also override any configurations that were set by global-config.php here.
*/


/**********************************************
****** Global Application Configurations ******
**********************************************/

// Set a Site-Wide Salt between 60 and 68 characters
// NOTE: Only change this value ONCE after installing a new copy. It will affect all passwords created in the meantime.
define("SITE_SALT", "8g!T6FQzm34HpiKZ4YnesV6oLmBtqtIrVcL;ITbwL=pcW_Es3Y.8waDel5ktmmQ6X");
//					|    5   10   15   20   25   30   35   40   45   50   55   60   65   |

// Set a unique 10 to 22 character keycode (alphanumeric) to prevent code overlap on databases & shared servers
// For example, you don't want sessions to transfer between multiple sites on a server (e.g. $_SESSION['user'])
// This key will allow each value to be unique (e.g. $_SESSION['siteCode_user'] vs. $_SESSION['otherSite_user'])
define("SITE_HANDLE", "article_nhl");

// Set the Application Path (in most cases, this is the same as CONF_PATH)
define("APP_PATH", dirname(CONF_PATH) . "/article");


// Prepare Default Theme
Theme::set("default");

// Site-Wide Configurations
$config['site-name'] = "National Hockey League";
$config['database']['name'] = "article_nhl";


/***********************************
****** Production Environment ******
***********************************/
if(ENVIRONMENT == "production") {

	// Set Important URLs
	define("SITE_URL", "http://nhl.unifaction.com");
	define("CDN", "http://cdn.unifaction.com");
	
	// Important Configurations
	$config['site-domain'] = "nhl.unifaction.com";		#production
	$config['admin-email'] = "info@unifaction.com";
}

/************************************
****** Development Environment ******
************************************/
else if(ENVIRONMENT == "development") {
	
	// Set Important URLs
	define("SITE_URL", "http://nhl.phptesla.com");
	define("CDN", "http://cdn.phptesla.com");
	
	// Important Configurations
	$config['site-domain'] = "nhl.phptesla.com";		#development
	$config['admin-email'] = "info@phptesla.com";
}

/******************************
****** Local Environment ******
******************************/
else if(ENVIRONMENT == "local") {
	
	// Set Important URLs
	define("SITE_URL", "http://nhl.test");
	define("CDN", "http://cdn.test");
	
	// Important Configurations
	$config['site-domain'] = "nhl.test";
	$config['admin-email'] = "info@unifaction.test";

}