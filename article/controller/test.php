<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Prevent invalid users
if(!Me::$loggedIn or Me::$clearance < 8)
{
	exit;
}

exit;

Database::initRoot();
DatabaseAdmin::addIndex("content_entries", "date_posted", "INDEX");
DatabaseAdmin::removePartitions("content_entries");


echo "Database updated.";