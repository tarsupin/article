<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

if(Me::$loggedIn and Me::$clearance >= 6)
{
	echo "Updating System...";
	
	require(CONF_PATH . "/includes/install-script.php");
	
	echo " done.";
}
else
{
	header("Location: /"); exit;
}