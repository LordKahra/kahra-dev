<?php

use kahra\dev\src\view\page\IndexPage;

require_once (getenv("SITE_ROOT_KAHRA_DEV") . '/src/config/app_config.php');

$page = new IndexPage();

$page->render();