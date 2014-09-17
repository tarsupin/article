<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); }

// Run Global Script
require(CONF_PATH . "/includes/global.php");

// Display the Header
require(SYS_PATH . "/controller/includes/metaheader.php");
require(SYS_PATH . "/controller/includes/header.php");

// Display Side Panel
require(SYS_PATH . "/controller/includes/side-panel.php");

echo '
<div id="panel-right"></div>
<div id="content">' . Alert::display();

echo 'home page<br />ijdsofij sdof<br /> oisjdf <br />ijdsofij sdof<br /> oisjdf <br />ijdsofij sdof<br /> oisjdf <br />ijdsofij sdof<br /> oisjdf <br />ijdsofij sdof<br /> oisjdf <br />ijdsofij sdof<br /> oisjdf ';

echo '
</div>';

// Display the Footer
require(SYS_PATH . "/controller/includes/footer.php");
