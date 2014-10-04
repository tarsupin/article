<?php if(!defined("CONF_PATH")) { die("No direct script access allowed."); } 

Database::initRoot();

// Create the Site's Official Hashtags
ContentHashtags::create("Travel", "Travel");
ContentHashtags::create("NAmericaTravel", "Travelling in North America");
ContentHashtags::create("CanadaTravel", "Travelling in Canada");
ContentHashtags::create("USTravel", "Travelling in the United States");
ContentHashtags::create("MexicoTravel", "Travelling in Mexico");
ContentHashtags::create("SAmericaTravel", "Travelling in South America");
ContentHashtags::create("EUTravel", "Travelling in Europe");
ContentHashtags::create("WestEUTravel", "Travelling in Western Europe");
ContentHashtags::create("EastEUTravel", "Travelling in Eastern Europe");
ContentHashtags::create("ScandanavianTravel", "Travelling in Scandinavia");
ContentHashtags::create("MediterraneanTravel", "Travelling in the Mediterranean");
ContentHashtags::create("AsiaTravel", "Travelling in Asia");
ContentHashtags::create("SEAsiaTravel", "Travelling in Southeast Asia");
ContentHashtags::create("IndiaTravel", "Travelling in India");
ContentHashtags::create("RussiaTravel", "Travelling in Russia");
ContentHashtags::create("ChinaTravel", "Travelling in China");
ContentHashtags::create("WestAsiaTravel", "Travelling in West Asia");
ContentHashtags::create("AustraliaTravel", "Travelling in Australia");
ContentHashtags::create("AfricaTravel", "Travelling in Africa");
ContentHashtags::create("NAfricaTravel", "Travelling in North Africa");
ContentHashtags::create("SubSaharanTravel", "Travelling in the Sub-Saharan");