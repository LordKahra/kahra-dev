<?php

namespace kahra\dev\src\view\page;

class StorytellerPage extends Page {

    public function __construct() {
        parent::__construct("Storyteller Background", "storyteller");
    }

    function renderBody() { ?>
        <section>
            <h1>Storyteller Background</h1>
            <p>Choose your path.</p>
            <p><a href="#skillset">What can you do?</a></p>
            <p><a href="#experience">Where have you been?</a></p>
            <p><a href="#portfolio">What have you done?</a></p>
            <p><a href="#about">Who are you?</a></p>
        </section>

        <section>
            <h1 id="skillset">Skillset</h1>

            <ul>
                <li>Worldbuilding and Setting Design</li>
                <li>Transmedia Storytelling</li>
                <li>Lore Documentation, WorldAnvil Management</li>
                <li>Mod Writing, Rules Marshalling and other Storyteller Responsibilities</li>
                <li>Software Development in Service of Storytelling Goals</li>
                <li>Discord Management</li>
            </ul>
        </section>

        <section>
            <h1 id="experience">Experience</h1>

            <figure>
                <header>Dystopia Rising Georgia</header>
                <p>April 2021 - Current</p>
                <ul>
                    <li>Wrote interactive content (mods) for both virtual and live games.</li>
                    <li>Portrayed prominent recurring non-player characters.</li>
                    <li>Wrote settings documentation in coordination with storytelling team.</li>
                </ul>
            </figure>

            <figure>
                <h2>Dystopia Rising Florida</h2>
                <p>March 2020 - July 2021</p>
                <ul>
                    <li>Wrote interactive content (mods) for both virtual and live games.</li>
                    <li>Coordinated between storytellers and helped manage storyteller scheduling.</li>
                    <li>Created and managed game Discord servers, both prior to and during events.</li>
                    <li>Developed standalone web content for player interaction during games.</li>
                </ul>
            </figure>
        </section>

        <section>
            <h1 id="portfolio">Works</h1>

            <figure>
                <header>The Free City of Skunkraft - Design Document - <a href="https://docs.google.com/document/d/1x4TglmfKvxssRPC3ngMEohVpQC4vUvd1TPCuDaCPPjo/edit?usp=sharing">https://docs.google.com/document/d/1x4TglmfKvxssRPC3ngMEohVpQC4vUvd1TPCuDaCPPjo/edit?usp=sharing</a></header>
                <main>
                    <ul>
                        <li>The setting document for the Free City of Skunkraft, a city in the lore of Dystopia Rising Florida.</li>
                        <li>There were some contributions made by other members of the DRFL team, but I wrote the initial document and made any updates.</li>
                    </ul>
                </main>
            </figure>

            <figure>
                <header>Syntax Error - <a href="https://syntax-error.herokuapp.com">https://syntax-error.herokuapp.com</a></header>
                <main>
                    <ul>
                        <li>Developed an interactive "control panel" website for use during the Dystopia Rising Florida July 2020 virtual event, <i>Syntax Error</i>. Players could enter codes into the control panel, and once a code was found, it would appear to all players under "recent commands."</li>
                        <li>Created with PHP 7, MySQL, HTML5 and CSS.</li>
                        <li>Wrote discoverable game content, including logs and Twine stories.</li>
                        <li>Prepared and ran collaborative content as a storyteller.</li>
                        <li>All content on this website was personally written by me.</li>
                    </ul>

                </main>
            </figure>

        </section>

        <section>
            <h1 id="about">About Me</h1>

            <p>My name's Lane (he/him). I've been LARPing since April 2017.</p>

            <p><img src="<?=SITE_HOST;?>/res/images/flag-lgbt.png"/> <img src="<?=SITE_HOST;?>/res/images/flag-trans.png"/></p>
        </section>
    <?php }
}