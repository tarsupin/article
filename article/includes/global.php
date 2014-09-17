<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// This page will still be loaded by the system at times. Redirect to the CONF_PATH version, since that is active.

// Run Global Script
require(CONF_PATH . "/includes/global.php");