<?php

// Database environment variables 
define("DATABASE_HOST", "mysql_service_MVC");
define("DATABASE_NAME", "Simplimmo");
define("DATABASE_USERNAME", "root");
define("DATABASE_PASSWORD", "Simplon05/2024");

// Routing environment variables
define("BASE_URL", "/public");
define("BASE_ASSETS", "../src/Views/");
define("BASE_IMG", "../src/Views/");

// Routing pages
define("URL_HOMEPAGE", BASE_URL . "/");
define("URL_STUDENTS", BASE_URL . "/students"); // à supprimer 
define("URL_LOGIN", BASE_URL . "/Login");
define("URL_REGISTER", BASE_URL . "/Register");
define("URL_ANNONCES", BASE_URL . "/Annonces");
define("URL_DETAIL", BASE_URL . "/Detail");
define("URL_CONTACT", BASE_URL . "/Contact");
define("URL_SUCCESS", BASE_URL . "/Success");
define("URL_ADMIN", BASE_URL . "/Admin");
