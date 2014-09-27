<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

/*
	This install script is provided here so that we can insert special search filters during installation for this
	specific site. To see all options, review "ModuleSearch::createFilterOptions"
	
	// The General Setup
	ModuleSearch::createFilterOption($archetype, $filterName, $value, $humanTitle, $filterType);
	
	// Example of a "Magic Items" filter
	ModuleSearch::createFilterOption("magic-items", "power", "powerful", "Powerful", ModuleSearch::FILTER_SINGLE);
	ModuleSearch::createFilterOption("magic-items", "power", "moderate", "Moderate", ModuleSearch::FILTER_SINGLE);
	ModuleSearch::createFilterOption("magic-items", "power", "weak", "Weak", ModuleSearch::FILTER_SINGLE);
	
	// This would create a search archetype called "Magic Items" that has a filter called "Power Level":
	<select name="power-level">
		<option value="">-- Any --</option>
		<option value="powerful">Powerful</option>
		<option value="moderate">Moderate</option>
		<option value="weak">Weak</option>
	</select>
*/

/*
ModuleSearch::createFilterOption("magic-items", "power", "powerful", "Powerful", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("magic-items", "power", "moderate", "Moderate", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("magic-items", "power", "weak", "Weak", ModuleSearch::FILTER_SINGLE);

ModuleSearch::createFilterOption("magic-items", "setting", "fantasy", "Fantasy", ModuleSearch::FILTER_CHOICE);
ModuleSearch::createFilterOption("magic-items", "setting", "modern", "Modern", ModuleSearch::FILTER_CHOICE);
ModuleSearch::createFilterOption("magic-items", "setting", "futuristic", "Futuristic", ModuleSearch::FILTER_CHOICE);

ModuleSearch::createFilterOption("magic-items", "traits", "cursed", "Cursed", ModuleSearch::FILTER_MULTI);
ModuleSearch::createFilterOption("magic-items", "traits", "legendary", "Legendary", ModuleSearch::FILTER_MULTI);
ModuleSearch::createFilterOption("magic-items", "traits", "attuned", "Attuned", ModuleSearch::FILTER_MULTI);
*/

ModuleSearch::createFilterOption("magic-items", "power", "powerful", "Powerful", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("magic-items", "power", "moderate", "Moderate", ModuleSearch::FILTER_SINGLE);
ModuleSearch::createFilterOption("magic-items", "power", "weak", "Weak", ModuleSearch::FILTER_SINGLE);