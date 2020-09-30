<?php

namespace kahra\dev\src\view\page;

class IndexPage extends Page {

    public function __construct() {
        parent::__construct("Index", "index");
    }

    function renderBody() { ?>
        <section>
            <h1>Welcome. My name is Lane.</h1>
            <p>Choose your path.</p>
            <p><a href="#skillset">What can you do?</a></p>
            <p><a href="#experience">Where have you been?</a></p>
            <p><a href="#portfolio">What have you done?</a></p>
            <p><a href="#about">Who are you?</a></p>
        </section>

        <section>
            <h1 id="skillset">Skillset</h1>

            <ul>
                <li>PHP 7+, MySQL, JavaScript</li>
                <li>HTML5, CSS3, Bootstrap</li>
                <li>Java, JUnit</li>
                <li>Lua</li>
                <li>Salesforce, Apex, Visualforce</li>
                <li>Android</li>
                <li>Git, Heroku</li>
                <li>Agile Software Development</li>
            </ul>
        </section>

        <section>
            <h1 id="experience">Experience</h1>

            <figure>
                <h2>Star2Star Communications</h2>
                <p>Jan 2017 - Current</p>
                <ul>
                    <li>Developed Lua programs which interacted with the Event Socket Layer to respond to phone call events. Users could dial an emergency code to invite other users to a conference room via text or phone call.</li>
                    <li>Developed MySQL stored procedures for use with reporting software.</li>
                    <li>Maintained legacy PHP 5 code and developed reporting solutions in PHP 7.0+.</li>
                </ul>
            </figure>

            <figure>
                <header>Evans Consulting</header>
                <p>Feb 2015 - Oct 2016</p>
                <ul>
                    <li>Developed an API in PHP for the client’s Salesforce data, allowing access to users, questionnaires, event registration and other relevant data. Also moved the API away from a procedural style and towards a more object-oriented approach.</li>
                    <li>Extended ELGG API functionality, allowing social networking data from the ELGG API to be consumed by the main API. Took an object-oriented approach from the start, ensuring the ELGG API functionality would be easy to extend in the future.</li>
                    <li>Maintained legacy Apex and Visualforce code.</li>
                </ul>
            </figure>

            <figure>
                <h2>X-Tech International</h2>
                <p>Jun 2014 - Nov 2014</p>
                <ul>
                    <li>Developed pages, email templates, triggers and controllers in Visualforce and Apex.</li>
                </ul>
            </figure>
        </section>

        <section>
            <h1 id="portfolio">Works</h1>

            <figure>
                <header>Syntax Error - <a href="https://syntax-error.herokuapp.com">https://syntax-error.herokuapp.com</a></header>
                <main>
                    <ul>
                        <li>Developed an interactive "control panel" website for use during the Dystopia Rising Florida July 2020 virtual event, <i>Syntax Error</i>. Players could enter codes into the control panel, and once a code was found, it would appear to all players under "recent commands."</li>
                        <li>Created with PHP 7, MySQL, HTML5 and CSS.</li>
                        <li>Wrote discoverable game content, including logs and Twine stories.</li>
                        <li>Prepared and ran collaborative content as a storyteller.</li>
                    </ul>

                </main>
            </figure>

            <figure>
                <header>DRFL Virtual - <a href="https://github.com/LordKahra/drfl-virtual">https://github.com/LordKahra/drfl-virtual</a></header>
                <main>
                    <ul>
                        <li>A barebones event coordination website for virtual tabletop events. Allows storytellers to have detailed information about their mods, see the event schedule, know when their casted characters are on mods, see what mods need to be ready for game day, and more.</li>
                        <li>Created with PHP 7, MySQL, HTML5 and CSS.</li>
                    </ul>
                </main>
            </figure>

            <figure>
                <header>Tournament Parser - <a href="https://github.com/LordKahra/tournament-api">https://github.com/LordKahra/tournament-api</a></header>
                <main>
                    <ul>
                        <li>Formerly a tournament sharing utility. Users could upload Wizards Event Reporter tournament files and get a shareable link.</li>
                        <li>Theoretically still works, if Wizards hasn't updated their save format since I stopped judging.</li>
                        <li>Created with PHP, MySQL, HTML5 and CSS3.</li>
                    </ul>
                </main>
            </figure>

        </section>

        <section>
            <h1 id="about">About Me</h1>

            <p>My name's Lane (he/him). I'm a software developer. I'm also an avid LARPer and storyteller.</p>

            <p><img src="<?=SITE_HOST;?>/res/images/flag-lgbt.png"/> <img src="<?=SITE_HOST;?>/res/images/flag-trans.png"/></p>
        </section>
    <?php }
}