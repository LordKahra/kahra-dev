<?php

//define("SITE_ROOT", "S:/Git/kahra-dev");
//define("SITE_HOST", "http://localhost:8080/git/kahra-dev");

define("SITE_ROOT", getenv("SITE_ROOT_KAHRA_DEV"));
define("SITE_HOST", getenv("SITE_HOST_KAHRA_DEV"));

// MYSQL
//define("DATABASE_HOST", getenv("DATABASE_HOST"));
//define("DATABASE_USERNAME", getenv("DATABASE_USERNAME"));
//define("DATABASE_PASSWORD", getenv("DATABASE_PASSWORD"));
//define("DATABASE_NAME", "kahra_dev");
//define("DATABASE_NAME", getenv("DATABASE_NAME_KAHRA_DEV"));
// TODO: Determine if mysql access is needed.

// Debugging Switch.
define("DEBUG_MODE", true);

// GLOBAL REQUIREMENTS
require_once SITE_ROOT . "/src/config/global_config.php";