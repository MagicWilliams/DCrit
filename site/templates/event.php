<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $page->title() ?> ~ D-Crit</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
    <?= css('assets/css/style.css') ?>
    <?= css('@auto') ?>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"
    ></script>
    <?= js('assets/js/script.js') ?>
    <?= js('@auto') ?>
</head>
<body>
    <header>
        <a href="/" title="D-Crit" class="home">
            <span>D</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401 108.01"><path d="M3.7,53.51s0-0,98.5-0c91,0,107,0,194,0,60,0,108.5-0,108.5-0" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="9"/></svg><span>CRIT</span>
        </a>
        <div id="main-nav" class="main main-nav">
            <button aria-expanded="false" aria-label="Main Navigation Button" type="button" aria-haspopup="true" aria-controls="main-nav" class="menu"><span class="mobi" aria-hidden="true">&#9776;</span><span class="desk">Menu</span></button>
            <div class="navarea">
                <nav class="nav-head" aria-label="Main Menu">
                    <ul class="mainlinks">
                        <li <?php e($site->find('home')->isActive(), 'class="active" aria-current="page"') ?>>
                            <a href="<?= $navhome?>">
                                D-Crit
                            </a>
                            <ul class="sublinks">
                                <li><a href="<?= $navhome ?>#updates"><?=$site->find("home")->updatetitle() ?></a></li>
                                <li><a href="<?= $navhome ?>#reads"><?=$site->find("home")->readtitle() ?></a></li>
                                <li><a href="<?= $navhome ?>#events"><?=$site->find("home")->eventtitle() ?></a></li>
                            </ul>
                        </li>
                        <li <?php e($site->find('apply')->isActive(), 'class="active" aria-current="page"') ?>>
                            <a href="<?= $navapply ?>">
                                Apply
                            </a>
                            <ul class="sublinks">
                                <li><a href="<?= $navapply ?>#reqs"><?=$site->find("apply")->reqtitle() ?></a></li>
                                <li><a href="<?= $navapply ?>#timeline"><?=$site->find("apply")->timetitle() ?></a></li>
                                <li><a href="<?= $navapply ?>#info-sessions"><?=$site->find("apply")->infotitle() ?></a></li>
                            </ul>
                        </li>
                        <li <?php e($site->find('program')->isActive(), 'class="active" aria-current="page"') ?>>
                            <a href="<?= $navprogram ?>">
                                Program
                            </a>
                            <ul class="sublinks">
                                <li><a href="<?= $navprogram ?>#overview"><?=$site->find("program")->overviewtitle() ?></a></li>
                                <li><a href="<?= $navprogram ?>#courseintro"><?=$site->find("program")->coursestitle() ?></a></li>
                                <li><a href="<?= $navintensive ?>"><?=$site->find("program")->inttitle() ?></a></li>
                            </ul>
                        </li>
                        <li <?php e($site->find('people')->isActive(), 'class="active" aria-current="page"') ?>>
                            <a href="<?= $navpeople ?>">
                                People
                            </a>
                            <ul class="sublinks">
                                <li><a href="<?= $navpeople ?>#faculty">Faculty & Lecturers</a></li>
                                <li><a href="<?= $navpeople ?>#students">Students</a></li>
                                <li><a href="<?= $navpeople ?>#alumni">Alumni</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="nav-footer">
                    <div>
                        <p>SVA MA Design Research<br>136 W 21st St, 2nd Floor<br>New York, NY 10011</p>
                        <p><a href="mailto:designresearch@sva.edu" id="menuemail">designresearch@sva.edu</a><br>(212) 592-2228</p>
                        <nav class="social" aria-label="Social Media">
                            <a href="https://www.facebook.com/SVADesignResearch/"><img src="<?php echo kirby()->urls()->assets() . '/images/social_fb.png' ?>" alt="D-Crit on Facebook"></a>
                            <a href="https://twitter.com/dcrit?lang=en"><img src="<?php echo kirby()->urls()->assets() . '/images/social_tw.png' ?>" alt="D-Crit on Twitter"></a>
                            <a href="https://www.instagram.com/svadesignresearch/?hl=en"><img src="<?php echo kirby()->urls()->assets() . '/images/social_insta.png' ?>" alt="D-Crit on Instagram"></a>
                        </nav>
                    </div>
                    <div>
                        <form action="https://sva.us6.list-manage.com/subscribe/post?u=56811f79ec&amp;id=e999237562&amp;f_id=00d2c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
                            <div id="mc_embed_signup_scroll">
                                <p id="menu-subscribe">Subscribe to our newsletter</h2>
                                <div class="mc-field-group">
	                                <label for="mce-EMAIL-menu" class="sr-only">Email:</label><br>
	                                <input aria-labelledby="menu-subscribe" type="email" value="name@example.com" name="EMAIL" class="required email" id="mce-EMAIL-menu" required>
	                                <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_56811f79ec_e999237562" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button" aria-labelledby="menu-subscribe"></div>
                            </div>
                        </form>
                    </div>
                    <div class="spacer"></div>
                    <div class="copyright">
                    <a href="https://sva.edu/"><img src="<?php echo kirby()->urls()->assets() . '/images/sva-logo.png' ?>" alt="Visit the School of Visual Arts Homepage"></a>
                        <p>©2022 School<br>of Visual Arts</p>
                        <p>Website by<br><a href="https://morcoskey.com/">Morcos Key</a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="img-container" tabindex="-1">
    <img src="<?= $page->img()->toFile()->croppedImage()->url() ?>" alt="">
</div>
    <?php
        $image = $page->img()->toFile();
        
        if ($image->croppedImage()->exists()) {
            var_dump($image->croppedImage()->exists());
        } else {
            echo "Method croppedImage does not exist.";
        }
    ?>
<section>
    <div class="etext">
        <h1 id="eventname"><span class="sr-only">D-Crit</span><?=$page->headline() ?></h1>
        <p><?= $byline ?></p>
        <?php foreach($page->fulldescrip()->toBlocks() as $block): ?>
            <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
        <?php endforeach ?>
    </div>
    <?php if(!$reglink && $page->documentation()->isEmpty()): ?>
        <div class="elinks"></div>
    <?php else: ?>
    <div class="elinks">
        <?php if($reglink): ?>
            <a class="button" href="<?= $page->link() ?>" aria-labelledby="eventname">Register <span class="sr-only">for this event on <?= $linkhost ?></span></a>
        <?php endif ?>
        <?php if($page->documentation()->isNotEmpty()): ?>
            <a class="button" href="<?= $page->documentation() ?>">Watch <span class="sr-only">&nbsp;<?= $watchlink ?></span></a>
        <?php endif ?>
    </div>
    <?php endif ?>
</section>
<?php snippet('footer') ?>