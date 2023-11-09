<footer>
        <div class="footer_col1">
            <div>
                <h2 class="sr-only">Contact</h2>
                <ul>
                    <li>SVA MA Design Research</li>
                    <li>136 W 21st St, 2nd Floor<br>New York, NY 10011</li>
                    <li id="email"><a href="mailto:designresearch@sva.edu">designresearch@sva.edu</a></li>
                    <li>(212) 592-2228</li>
                </ul>
            </div>
            <nav aria-label="Social Media">
                <h2 class="sr-only">Social Media Links</h2>
                <a href="https://www.facebook.com/SVADesignResearch/"><img src="<?php echo kirby()->urls()->assets() . '/images/social_fb.png' ?>" alt="D-Crit on Facebook"></a>
                <a href="https://twitter.com/dcrit?lang=en"><img src="<?php echo kirby()->urls()->assets() . '/images/social_tw.png' ?>" alt="D-Crit on Twitter"></a>
                <a href="https://www.instagram.com/svadesignresearch/?hl=en"><img src="<?php echo kirby()->urls()->assets() . '/images/social_insta.png' ?>" alt="D-Crit on Instagram"></a>
            </nav>
        </div>
        <div class="footer_col2" id="mc_embed_signup">
            <form action="https://sva.us6.list-manage.com/subscribe/post?u=56811f79ec&amp;id=e999237562&amp;f_id=00d2c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
                <div id="mc_embed_signup_scroll">
                    <h2 id="subscribe">Subscribe to our newsletter</h2>
                    <div class="mc-field-group">
	                    <label for="mce-EMAIL" class="sr-only">Email:</label><br>
	                    <input aria-labelledby="subscribe" type="email" value="name@example.com" name="EMAIL" class="required email" id="mce-EMAIL" required>
	                    <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_56811f79ec_e999237562" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button" aria-labelledby="subscribe"></div>
                </div>
            </form>
        </div>
        <div class="footer_spacer" aria-hidden="true"></div>
        <div class="footer_col3">
            <nav>
                <ul class="mainlinks">
                    <li>
                        <a href="<?= $navhome ?>">Home</a>
                        <ul>
                            <li><a href="<?= $navhome ?>#updates"><?=$site->find("home")->updatetitle() ?></a></li>
                            <li><a href="<?= $navhome ?>#reads"><?=$site->find("home")->readtitle() ?></a></li>
                            <li><a href="<?= $navhome ?>#events"><?=$site->find("home")->eventtitle() ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= $navapply ?>">Apply</a>
                        <ul>
                            <li><a href="<?= $navapply ?>#reqs"><?=$site->find("apply")->reqtitle() ?></a></li>
                            <li><a href="<?= $navapply ?>#timeline"><?=$site->find("apply")->timetitle() ?></a></li>
                            <li><a href="<?= $navapply ?>#info-sessions"><?=$site->find("apply")->infotitle() ?></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="mainlinks">
                    <li>
                        <a href="<?= $navprogram ?>">Program</a>
                        <ul>
                            <li><a href="<?= $navprogram ?>#overview"><?=$site->find("program")->overviewtitle() ?></a></li>
                            <li><a href="<?= $navprogram ?>#courseintro"><?=$site->find("program")->coursestitle() ?></a></li>
                            <li><a href="<?= $navintensive ?>"><?=$site->find("program")->inttitle() ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= $navpeople ?>">People</a>
                        <ul>
                            <li><a href="<?= $navpeople ?>#faculty">Faculty & Lecturers</a></li>
                            <li><a href="<?= $navpeople ?>#students">Students</a></li>
                            <li><a href="<?= $navpeople ?>#alumni">Alumni</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="footer_spacer" aria-hidden="true"></div>
        <div class="footer_col4 copyright">
            <h2 class="sr-only">Site Credits</h2>
            <a href="https://sva.edu/"><img src="<?php echo kirby()->urls()->assets() . '/images/sva-logo.png' ?>" alt="Visit the School of Visual Arts Homepage"></a>
            <p>©2022 School<br>of Visual Arts</p>
            <p>Website by<br>Morcos Key</p>
        </div>
    </footer>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
</body>
</html>