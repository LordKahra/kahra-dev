<?php

namespace kahra\dev\src\view\page;

abstract class Page {
    protected string $title;
    protected string $type;

public function __construct(string $title, string $type) {
    $this->title = $title;
    $this->type = $type;
}

// ACCESS

/**
 * @return string
 */
public function getTitle(): string {
    return $this->title;
}

/**
 * @return string
 */
public function getType(): string {
    return $this->type;
}

// RENDERS

function render() {
    $this->renderHeader();
    $this->renderBody();
    $this->renderFooter();
}

function renderHeader() {
    $this->renderHeaderStart();
    $this->renderHeaderMiddle();
    $this->renderHeaderEnd();
}

function renderHeaderStart() {
?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$this->getTitle();?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/fonts.css?v=<?=filemtime(SITE_ROOT . "/src/css/fonts.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/colors.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/main.css?v=<?=filemtime(SITE_ROOT . "/src/css/main.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/header-footer.css?v=<?=filemtime(SITE_ROOT . "/src/css/header-footer.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/visible.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/<?=$this->getType()?>.css"/>
    <script src="<?php echo SITE_HOST; ?>/js/jquery-1.12.3.js"></script>
    <script src="<?php echo SITE_HOST; ?>/js/view.js"></script>
</head>
<body>
<header>

    <div class="left name">
        <a href="<?=SITE_HOST . "/"?>">
            <span class="name-copy cyan" aria-hidden="true">Lane Flores</span>
            <span class="name-copy magenta" aria-hidden="true">Lane Flores</span>
            <span class="name-label">Lane Flores</span>
        </a>
    </div>

    <ul>
        <li><a href="<?=SITE_HOST;?>/#skillset-heading">Skillset</a></li>
        <li><a href="<?=SITE_HOST;?>/#portfolio">Works</a></li>
        <li><a href="<?=SITE_HOST;?>/#experience-heading">Experience</a></li>
        <li><a href="<?=SITE_HOST;?>/#about">About</a></li>
    </ul>

    <a class="connect" href="https://www.linkedin.com/in/laneflores/">Connect</a>

    <?php
    }

    function renderHeaderMiddle() {
        switch(strtolower($this->getType())) {
            case "admin":
                //$this->renderAdminHeaderMiddle();
                //break;
            default:
                break;
        }
    }



    function renderHeaderEnd() { ?>
</header>
<main>


    <?php }

    function renderFooter() {
?>

</main>
<footer>
    <p class="copyright">
        © 2026 Lane Flores // kahra-dev 2.0
    </p>
    <ul>
        <li><a href="https://github.com/LordKahra">GitHub</a></li>
        <li><a href="https://www.linkedin.com/in/laneflores/">LinkedIn</a></li>
    </ul>

</footer>

</body>
</html>
<?php
    }

    abstract function renderBody();

    public static function formatDescription(string $description) {
        // First off, add <br/> for each line.
        $description = nl2br($description);

        // Show figures.
        $description = preg_replace('/{!figure_(\d+)}/',
            "<a href='" . SITE_HOST . "/res/images/figures/$1.png'><img data-ui='thumbnail' data-type='figure' src='" . SITE_HOST . "/res/images/figures/$1.png' /></a>", $description);

        return $description;
    }
}