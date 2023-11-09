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
        <a class="skip-link sr-only sr-only-focusable" href="#main-content">
            <span class="hide-on-focus">Off screen link: </span>Skip to content
        </a>
        </div>
        <div class="homelogo">
        <a href="/" title="D-Crit" class="home">
            <span>D</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401 108.01"><path d="M3.7,53.51s0-0,98.5-0c91,0,107,0,194,0,60,0,108.5-0,108.5-0" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="9"/></svg><span>CRIT</span>
        </a>
        <span id="summer-subline" class="home">Summer Intensive</span>
        </div>
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

<?= js('assets/js/carousel.js') ?>
<div id="impact">
    <h1 class="dcrit" id="dcrit">
        <span>D</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401 108.01">
            <path d="M3.7,53.51s0-0,98.5-0c91,0,107,0,194,0,60,0,108.5-0,108.5-0" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="9"/>
        </svg>
        <span>CRIT</span>
        <span id="intsubline">Summer&nbsp;&nbsp;Intensive</span>
    </h1>
</div>
<div class="img-container" id="landingimg" tabindex="-1">
    <img tabindex="-1" alt="" src="<?= $page->hero()->toFile()->url() ?>">
</div>
<div class="intnavigation">
<nav id="intnav" aria-label="Summer Intensive Skip Links">
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#curriculum"><?= $page->currtitle() ?></a></li>
        <li><a href="#instructors"><?= $page->instructortitle() ?></a></li>
        <li><a href="#participants"><?=$page->partitle() ?></a></li>
        <li><a href="#testimonials"><?= $page->testtitle() ?></a></li>
        <li><a href="#apply"><?= $page->apptitle() ?></a></li>
</ul>
</nav>
</div>
<div class="sr-only skip-link" id="main-content"></div>
<section id="about">
    <h2 tabindex="-1" aria-hidden="true"></h2>
    <div class="content-wide">
    <?php if($page->dates()->isNotEmpty()): ?>
        <p class="intdates"><?= $page->dates() ?></p>
    <?php endif ?>
    <?php if($page->headline()->isNotEmpty()): ?>
        <p class="callout"><?= $page->headline()->kti() ?></p>
    <?php endif ?>
    <a class="cta mobi" href="#apply"><span class="sr-only">Skip to information on how to </span>Apply</a>
    <div class="content">
    <?php foreach($page->intro()->toBlocks() as $block): ?>
        <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
    <?php endforeach ?>
    <div class="notes">
        <a class="cta" href="#apply"><span class="sr-only">Skip to information on how to </span>Apply</a>
        <?php if($page->notes()->isNotEmpty()): ?>
            <div class="note-text"><?= $page->notes() ?></div>
        <?php endif ?>
    </div>
    </div>
    </div>
</section>
<section id="curriculum">
    <h2>
        <?php if($page->currtitle()->isNotEmpty()): ?>
            <?= $page->currtitle() ?>
        <?php else: ?>
            Curriculum
        <?php endif ?>
    </h2>
    <div class="content-wide">
    <?php if($page->curriculumintro()->isNotEmpty()): ?>
        <p class="callout"><?= $page->curriculumintro() ?></p>
    <?php endif ?>
    <div class="content">
    <?php foreach($page->curriculumabout()->toBlocks() as $block): ?>
        <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
    <?php endforeach ?>
    </div>
    <div class="intcourses">
    <?php $index = 0; ?>
    <?php foreach($courselist as $course): ?>
        <div class="person bio">
            <h3><button id="course-<?= strval($index+1) ?>" aria-controls="coursedescrip-<?=strval($index+1) ?>" aria-expanded="false"><?=$course["title"] ?></button></h3>
            <div class="bio-head courseinfo">
                <div class="coursemeta">
                    <div class="instructors">
                        <?= $course['instructors']?>
                    </div>
                </div>
                <div class="coursedescrip bio-text" id="coursedescrip-<?= strval($index+1) ?>" aria-labelledby="course-<?= strval($index+1) ?>">
                    <?= $course['description'] ?>
                </div>
            </div> 
            <div class="accordion">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25" tabindex="-1" aria-hidden="true">
                    <path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/>
                </svg>
            </div>
        </div>
        <?php $index++; ?>
    <?php endforeach ?>
    </div>
    </div>
</section>
<section id="instructors" class="instructorlist">
    <h2><?= $page->instructortitle() ?></h2>
    <ul class="content-wide" aria-label="Accordion Button Group">
        <?php $index=0; ?>
        <?php foreach($faculty as $fac): ?>
            <li class="person bio">
                <div class="bio">
                    <div class="bio-head">
                        <h3><button id="fac<?= strval($index+1) ?>" aria-controls="facbio<?= strval($index+1) ?>" aria-expanded="false"><?= $fac['name'] ?></button></h3>
                        <p><?= $fac['role'] ?></p>
                        <div class="accordion" aria-hidden="true">
                            <svg tabindex="-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25"><path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/></svg>
                        </div>
                    </div>
                    <div class="bio-text" id="facbio<?= strval($index+1) ?>" aria-labelledby="fac<?= strval($index+1) ?>">
                        <?= $fac['bio']->kt() ?>
                    </div>
                </div>
                <?php if($fac['img'] != ''):?>
                <div class="img-container">
                    <img src="<?= $fac['img']->url() ?>" alt="<?= $fac['img']->alt() ?>">
                </div>
                <?php else: ?>
                    <div class="img-container">
                        <div class="img-placeholder">
                        <img src="<?php echo kirby()->urls()->assets() . '/images/dcrit-logo-ls.svg'?>" alt="">
                        </div>
                    </div>
                <?php endif ?>
            </li>
            <?php $index++; ?>
        <?php endforeach ?>
    </ul>
</section>
<section id="participants" class="instructorlist">
<h2><?= $page->partitle() ?></h2>
    <ul class="content-wide" aria-label="Accordion Button Group">
        <?php $index=0; ?>
        <?php foreach($participants as $participant): ?>
            <li class="person bio">
                <div class="bio">
                    <div class="bio-head">
                        <h3><button id="par<?= strval($index+1) ?>" aria-controls="parbio<?= strval($index+1) ?>" aria-expanded="false"><?= $participant['name'] ?></button></h3>
                        <p><?= $participant['role'] ?></p>
                        <div class="accordion" aria-hidden="true">
                            <svg tabindex="-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25"><path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/></svg>
                        </div>
                    </div>
                    <div class="bio-text" id="parbio<?= strval($index+1) ?>" aria-labelledby="par<?= strval($index+1) ?>">
                        <?= $participant['bio'] ?>
                    </div>
                </div>
                <?php if($participant['parimg'] != ''):?>
                <div class="img-container">
                    <img src="<?= $participant['parimg']->url() ?>" alt="<?= $participant['parimg']->alt() ?>">
                </div>
                <?php else: ?>
                    <div class="img-container">
                        <div class="img-placeholder">
                        <img src="<?php echo kirby()->urls()->assets() . '/images/dcrit-logo-ls.svg'?>" alt="">
                        </div>
                    </div>
                <?php endif ?>
            </li>
            <?php $index++; ?>
        <?php endforeach ?>
    </ul>
</section>
<section id="testimonials">
    <div class="sidebar">
        <h2><span><?= $page->testtitle() ?></span></h2>
        <div class="carousel-controls"></div>
    </div>
    <div class="content-wide">
    <div class="slider content">
        <ul class="carousel session" aria-live="polite">
            <?php foreach($testimonials as $testimonial): ?>
                <li class="slide session">
                    <?php if($testimonial['img'] != ''): ?>
                    <div class="carousel-image">
                        <img src="<?= $testimonial['img']->url() ?>" alt="<?=$testimonial['img']->alt()?>">
                    </div>
                    <?php endif ?>
                    <?= $testimonial['txt'] ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
            </div>
</section>
<section id="apply" class="intapply">
    <h2><?= $page->apptitle() ?></h2>
    <div class="content-wide">
    <p class="callout"><?=$page->announcement()->kti() ?></p>
    <div class="content">
    <h3>How to Apply</h3>
    <div class="appmethods">
        <?php $i = 1; ?>
        <?php foreach($page->appmethods()->toStructure() as $method): ?>
            <div>
                <?php if($page->appmethods()->toStructure()->count() > 1): ?>
                <h4>Option <?= $i ?></h4>
                <?php endif ?>
                <?= $method->methodtext()->kt() ?>
                <?php if($method->method() == 'form'): ?>
                    <a class="apply-now cta" href="<?= $method->formlink() ?>">Apply Online<span class="sr-only">using our online application form (external link)</span></a>
                <?php endif ?>
            </div>
            <?php $i++; ?>
        <?php endforeach ?>        
    </div>
    <?php foreach($page->appinfo()->toBlocks() as $block): ?>
        <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
    <?php endforeach ?>
    <?php if($page->furtherinfo()->isNotEmpty()):?>
        <h3 class="sr-only">Further Information</h3>
        <div id="furtherinfo">
        <?= $page->furtherinfo()->kt() ?>
        </div>
    <?php endif ?>
    </div>
    </div>
</section>
<script type="text/javascript" src="slick/slick.min.js"></script>
<?php snippet('footer') ?>
