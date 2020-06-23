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
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/colors.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/header-footer.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/visible.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_HOST; ?>/src/css/responsive.css"/>
    <script src="<?php echo SITE_HOST; ?>/js/jquery-1.12.3.js"></script>
    <script src="<?php echo SITE_HOST; ?>/js/view.js"></script>
</head>
<body>
<header>

        <div class="left">
            <a href="<?=SITE_HOST . "/"?>">Lane Flores, Software Developer</a>
        </div>
        <div>
        <a href="<?=SITE_HOST . "konami.php"?>">Test Page</a>
        <button src="<?=SITE_HOST . "/"?>">X</button>
        <button src="<?=SITE_HOST . "/"?>">X</button>
        </div>

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

    private function renderAdminHeaderMiddle() {
        // Need database.
        global /** @var EventDatabase $db */ $db;
        // Need events without details.
        $events = $db->getEvents("", false);
        // Need guides.
        $players = $db->getGuides();
        ?>
        <nav>
            <ul>
                <li><b>FILTERS</b></li>
                <li><a href="admin_mod.php?filter=all">Admin Mods - All</a></li>
                <li><a href="admin_mod.php?filter=current">Admin Mods - Current</a></li>
                <li>
                    <form action="admin_mod.php" method="get">Admin Mods by Event:
                        <input type="hidden" name="filter" value="event"/>
                        <select id="filter_id" name="filter_id" onchange="this.form.submit()">
                            <option label=" ">Select an Event</option>
                            <?php foreach ($events as $event) { ?>
                                <option value="<?=$event->getId() ?>"><?=$event->getName()?></option>
                            <?php } ?>
                        </select>
                    </form>
                </li>

                <li><a href="admin_character.php">Admin Characters</a></li>
                <!--li>
                    <form action="admin.php" method="get">Admin Mods by Guide:
                        <input type="hidden" name="filter" value="player"/>
                        <select id="filter_id" name="filter_id" onchange="this.form.submit()">
                            <option label=" ">Select a Guide</option>
                            <?php foreach ($players as $player) { ?>
                                <option value="<?=$player->getId() ?>"><?=$player->getName()?></option>
                            <?php } ?>
                        </select>
                    </form>
                </li-->
            </ul>
        </nav>
        <?php
    }



    function renderHeaderEnd() { ?>
</header>
<main>


    <?php }

    function renderFooter() {
?>

</main>
<footer>
    <div>FOOTER</div>
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