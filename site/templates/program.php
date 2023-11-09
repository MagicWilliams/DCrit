<?php snippet('header', ['navhome' => $navhome, 'navapply' => $navapply, 'navprogram' => $navprogram, 'navpeople' => $navpeople, 'navintensive' => $navintensive]) ?>
<div class="page-title">
    <h1><span class="sr-only">D-Crit</span><?= $page->title() ?></h1>
</div>
<div class="img-container" tabindex="-1">
    <img tabindex="-1" src="<?= $page->hero()->toFile()->url()?>" alt="">
</div>
<div class="sr-only skip-link" id="main-content"></div>
<section id="overview">
    <h2>Overview<br>& Mission</h2>
    <div class="content-wide throttle">
        <p class="callout"><?= $page->programintro()->kti() ?></p>
        <div class="content-sm">
            <?php foreach ($page->about()->toBlocks() as $block): ?>
                <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<section id="courseintro">
    <h2>Courses</h2>
    <div class="content-wide throttle">
        <p class="callout"><?= $page->courseintro()->kti() ?></p>
        <div class="content-sm">
            <?php foreach ($page->courseabout()->toBlocks() as $block): ?>
                <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<section id="fall" class="courses">
    <h3>Fall</h3>
    <div class="content-wide">
    <?php foreach ($fall as $index=>$course): ?>
    <div class="person bio">
        <h4><button id="fall-<?= strval($index+1) ?>" aria-controls="falldescrip-<?= strval($index+1) ?>" aria-expanded="false"><?= $course['title'] ?></button></h4>
        <div class="bio-head courseinfo">
            <div class="coursemeta">
                <div class="instructors">
                    <?= $course['instructors']?>
                </div>
                <p><?= $course['day'] ?>–<?= $course['time'] ?></p>
            </div>
            <div class="coursedescrip bio-text" id="falldescrip-<?= strval($index+1) ?>" aria-labelledby="fall-<?= strval($index+1) ?>">
                <?= $course['description'] ?>
            </div>        
        </div>
        <div class="accordion">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25" tabindex="-1" aria-hidden="true">
            <path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/>
        </svg>
        </div>
    </div>
    <?php endforeach ?>
    </div>
</section>
<section id="spring" class="courses">
    <h3>Spring</h3>
    <ul class="content-wide" aria-label="Course Accordion Button Group">
    <?php foreach ($spring as $index=>$course): ?>
    <li class="person bio">
        <h4><button id="spring-<?= strval($index+1) ?>" aria-controls="springdescrip-<?= strval($index+1) ?>" aria-expanded="false"><?= $course['title'] ?>
        </button></h4>
        <div class="bio-head courseinfo">
            <div class="coursemeta">
                <div class="instructors">
                    <?= $course['instructors']?>
                </div>
                <p><?= $course['day'] ?>–<?= $course['time'] ?></p>
            </div>
            <div class="coursedescrip bio-text" id="springdescrip-<?= strval($index+1) ?>">
                <?= $course['description'] ?>
            </div>        
        </div>
        <div class="accordion" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25" tabindex="-1" aria-hidden="true">
                <path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/>
            </svg>
        </div>
    </li>
    <?php endforeach ?>
    </ul>
</section>
<section id="intensive">
    <h2><?= $page->inttitle() ?></h2>
    <div class="content-wide throttle">
        <p class="callout"><?= $page->intintro()->kti() ?></p>
        <div class="content-sm">
            <?php foreach ($page->intabout()->toBlocks() as $block): ?>
                <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
            <?php endforeach ?>
            <p class="callout"><?= $page->intlink()->kti() ?></p>
        </div>
    </div>
</section>
<?php snippet('footer') ?>
