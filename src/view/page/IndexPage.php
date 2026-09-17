<?php

namespace kahra\dev\src\view\page;

class IndexPage extends Page {

    public function __construct() {
        parent::__construct("Index", "index");
    }

    function renderBody() { ?>
        <section id="intro" class="terminal">
            <header>
                <section class="buttons">
                    <div class="red"></div>
                    <div class="yellow"></div>
                    <div class="green"></div>
                </section>
                <section class="name">
                    main.sh - Lane Flores
                </section>
            </header>
            <main>
                <p class="code">~/portfolio git:(main)</p>
                <h1>Software Engineer.</h1>
                <section class="subtitle">
                    <div class="summary">
                        Backend engineer with 10+ years delivering integrations across payments, commerce, and telecom. I turn ambiguous requirements into working software, with documentation that makes it easier to hand off.
                    </div>
                    <ul class="code">
                        <li>Focus: integrations &amp; solutions delivery</li>
                        <li>Languages: PHP, Go, Python</li>
                        <li>Based in <span class="contrast">Atlanta, GA</span></li>
                    </ul>
                </section>
            </main>
        </section>

        <h1>Skillset</h1>
        <section id="skillset">
            <figure class="backend">
                <header>Back-End &amp; Core</header>
                <ul>
                    <li>PHP 5 - 8.3</li>
                    <li>Go</li>
                    <li>Python</li>
                    <li>MySQL</li>
                    <li>PostgreSQL</li>
                </ul>
            </figure>
            <figure class="interactive">
                <header>Integrations</header>
                <ul>
                    <li>REST / JSON APIs</li>
                    <li>Salesforce</li>
                    <li>Apex / Visualforce</li>
                    <li>Lua</li>
                </ul>
            </figure>
            <figure class="devops">
                <header>Delivery &amp; Tooling</header>
                <ul>
                    <li>MCP / RAG</li>
                    <li>GitHub Copilot</li>
                    <li>MkDocs</li>
                    <li>Code review</li>
                </ul>
            </figure>
            <figure class="frontend">
                <header>Front-End</header>
                <ul>
                    <li>HTML5</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>
            </figure>
        </section>

        <h1 id="portfolio">Works</h1>
        <section id="works">
            <figure class="featured">
                <header>
                    <p class="category">Knowledge search &amp; integrations</p>
                    <h2>obsidian-rag</h2>
                </header>
                <main>
                    <p>A local retrieval-augmented generation (RAG) system over a Markdown knowledge base.</p>
                    <ul class="details">
                        <li>Uses Python, ChromaDB, and watchdog to support a local knowledge search pipeline.</li>
                        <li>Exposes filtered semantic search through an MCP server for Claude, Codex, and other MCP clients.</li>
                    </ul>
                    <ul class="stack" aria-label="Technologies">
                        <li>Python</li>
                        <li>ChromaDB</li>
                        <li>watchdog</li>
                        <li>MCP</li>
                    </ul>
                </main>
                <footer><a href="https://github.com/LordKahra/obsidian-rag">View obsidian-rag on GitHub</a></footer>
            </figure>

            <figure>
                <header>
                    <p class="category">Event coordination</p>
                    <h2>DRFL Virtual</h2>
                </header>
                <main>
                    <p>A coordination website for virtual tabletop events.</p>
                    <ul class="details">
                        <li>Gives storytellers access to event schedules, scenario details, character assignments, and preparation status.</li>
                    </ul>
                    <ul class="stack" aria-label="Technologies">
                        <li>PHP 7</li>
                        <li>MySQL</li>
                        <li>HTML5 / CSS</li>
                    </ul>
                </main>
                <footer><a href="https://github.com/LordKahra/drfl-virtual">View DRFL Virtual on GitHub</a></footer>
            </figure>

            <figure>
                <header>
                    <p class="category">Interactive event software</p>
                    <h2>Syntax Error</h2>
                </header>
                <main>
                    <p>An interactive control panel built for the Dystopia Rising Florida July 2020 virtual event.</p>
                    <ul class="details">
                        <li>Accepted player-entered codes and displayed discovered commands to all players.</li>
                        <li>Connected the event software with discoverable logs and Twine stories.</li>
                    </ul>
                    <ul class="stack" aria-label="Technologies">
                        <li>PHP 7</li>
                        <li>MySQL</li>
                        <li>HTML5 / CSS</li>
                        <li>Twine</li>
                    </ul>
                </main>
            </figure>
        </section>

        <h1>Experience</h1>
        <section id="experience">
            <ul>
                <li>
                    <header>
                        <h2>Waystar</h2>
                        <p class="dates">Aug 2024 - May 2026</p>
                        <p class="role">Advanced Application Engineer</p>
                    </header>
                    <ul>
                        <li>Built and extended backend APIs and internal tooling for healthcare payment services, including refunds, offline payments, and manual ACH transfers.</li>
                        <li>Integrated AI-assisted engineering workflows with human review into daily development.</li>
                        <li>Improved documentation and handoff with MkDocs/Python and production debugging support.</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <header>
                        <h2>Yum! Brands (Pizza Hut)</h2>
                        <p class="dates">Jan 2023 - Feb 2024</p>
                        <p class="role">PHP Software Engineer III</p>
                    </header>
                    <ul>
                        <li>Delivered checkout validation and promotional item-identification logic for Pizza Hut's digital commerce services.</li>
                        <li>Improved visibility into production time-related errors through targeted logging and documentation.</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <header>
                        <h2>Star2Star Communications</h2>
                        <p class="dates">Jan 2017 - Oct 2022</p>
                        <p class="role">Software Developer</p>
                    </header>
                    <ul>
                        <li>Delivered scoped automation, telephony, and reporting projects from customer requirements through production.</li>
                        <li>Built emergency conference software with Lua and the Event Socket Layer to connect the correct personnel to live calls.</li>
                        <li>Updated PHP/JavaScript business tools and built MySQL stored procedures and views for internal and client reporting.</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <header>
                        <h2>Evans Consulting</h2>
                        <p class="dates">Feb 2015 - Oct 2016</p>
                        <p class="role">Software Developer</p>
                    </header>
                    <ul>
                        <li>Developed PHP APIs integrating Salesforce and ELGG data for client websites and an iPad app.</li>
                        <li>Turned ambiguous requirements into working integrations while modernizing an aging codebase.</li>
                        <li>Maintained legacy Apex and Visualforce code.</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <header>
                        <h2>X-Tech International</h2>
                        <p class="dates">Jun 2014 - Nov 2014</p>
                        <p class="role">Junior Software Developer</p>
                    </header>
                    <ul>
                        <li>Developed pages, email templates, triggers and controllers in Visualforce and Apex.</li>
                    </ul>
                </li>
            </ul>
        </section>


        <section id="about">
            <div class="summary">
                <h1>About Lane</h1>
                <div class="bio">
                    <p>My name's Lane (he/him). I'm a software developer. I'm also an avid LARPer and storyteller.</p>
                    <p class="placeholder">[More about me — copy to come.]</p>
                </div>
                <div class="flags">
                    <img src="<?=SITE_HOST;?>/res/images/flag-lgbt.png" alt="LGBTQ+ pride flag"/>
                    <img src="<?=SITE_HOST;?>/res/images/flag-trans.png" alt="Transgender pride flag"/>
                </div>
                <ul class="links">
                    <li><a href="<?=SITE_HOST;?>/res/text/resume.pdf">Resume.pdf</a></li>
                    <li><a href="https://www.linkedin.com/in/laneflores/">Get in touch</a></li>
                </ul>
            </div>
            <figure class="portrait">
                <p>[Image placeholder]</p>
                <figcaption>Portrait or workspace photo</figcaption>
            </figure>
        </section>
    <?php }
}