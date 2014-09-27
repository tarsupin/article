<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

ModuleSearch::createFilterOption("nfl-full", "Team", "GBPackers", "Green Bay Packers", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("nfl-full", "Team", "DetroitLions", "Detroit Lions", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("nfl-full", "Team", "SF49ers", "SanFrancisco 49ers", ModuleSearch::FILTER_SINGLE);