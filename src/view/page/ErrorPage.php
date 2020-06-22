<?php

namespace kahra\dev\src\view\page;

class ErrorPage extends Page {
    private string $error;

    public function __construct(string $error) {
        parent::__construct($error, "error", $error);

        $this->error = $error;
    }

    function renderBody() { ?>
        <?=$this->error;?>
    <?php }
}