<?php

namespace kahra\dev\src\view\page;

class IndexPage extends Page {

    public function __construct() {
        parent::__construct("Index", "index");
    }

    function renderBody() { ?>
        Welcome.
    <?php }
}