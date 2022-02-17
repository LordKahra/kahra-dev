<?php

use kahra\dev\src\view\page\StorytellerPage;

require_once (getenv("SITE_ROOT_KAHRA_DEV") . '/src/config/app_config.php');

$page = new StorytellerPage();

$page->render();