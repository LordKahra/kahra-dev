<?php

// Requirements.
//use kahra\dev\src\model\database\Database;

// Error Reporting.
error_reporting(DEBUG_MODE ? E_ALL : 0);

// Session.
session_start();

// VARIABLES THAT WILL CHANGE FREQUENTLY
//define("CURRENT_EVENT", 3);

////////////////////////////
//// SOURCE CODE ////////
////////////////////////////

// EXCEPTION
require_once SITE_ROOT . "/src/exception/Exception.php";

// MODEL
//require_once SITE_ROOT . "/src/model/commands.php";

// VIEW - COMPONENTS
//require_once SITE_ROOT . "/src/view/component/Component.php";

// VIEW - PAGES
require_once SITE_ROOT . "/src/view/page/Page.php";

require_once SITE_ROOT . "/src/view/page/ErrorPage.php";

require_once SITE_ROOT . "/src/view/page/IndexPage.php";
require_once SITE_ROOT . "/src/view/page/KonamiPage.php";



// GLOBAL VARIABLES
//define("USER", "root@mainframe");
//define("CONSOLE", "<span class='console_name'>root@mainframe</span>: ");