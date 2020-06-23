<?php

namespace kahra\dev\src\view\page;

class IndexPage extends Page {

    public function __construct() {
        parent::__construct("Index", "index");
    }

    function renderBody() { ?>
        <section>
            <h1>Welcome. My name is Lane.</h1>
            <p>This page is just getting underway. In the meantime, what do you want to know?</p>
            <p><a href="#skillset">What can you do?</a></p>
            <p><a href="#experience">Where have you been?</a></p>
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

            <h2>Star2Star Communications</h2>
            <p>Jan 2017 - Current</p>

            <ul>




                <li>Evans Consulting</li>
                <li>X-Tech International</li>
            </ul>
        </section>

        <section>
            <h1 id="about">About Me</h1>

            <p>My name's Lane (he/him). I'm a software developer. I'm also an avid LARPer.</p>

            <p><img src="<?=SITE_HOST;?>/res/images/flag-lgbt.png"/> <img src="<?=SITE_HOST;?>/res/images/flag-trans.png"/></p>
        </section>
    <?php }
}