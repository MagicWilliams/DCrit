<?php snippet('header', ['navhome' => $navhome, 'navapply' => $navapply, 'navprogram' => $navprogram, 'navpeople' => $navpeople, 'navintensive' => $navintensive]) ?>
<div class="page-title">
    <h1><span class="sr-only">D-Crit</span> <?= $page->title() ?></h1>
</div>
<?php if($page->hero()->isNotEmpty()): ?>
<div class="img-container">
    <img src="<?= $page->hero()->toFile()->url()?>" alt="">
</div>
<?php endif ?>
<div class="sr-only skip-link" id="main-content"></div>
<section id="app-overview">
    <h2><?= $page->sectitle() ?></h2>
    <div class="content-wide throttle">
        <?php if($page->announcement()->isNotEmpty()): ?>
        <p class="callout"><?= $page->announcement()->kti() ?></p>
        <?php endif ?>
        <div class="content-sm apply">
            <?php foreach ($page->intro()->toLayouts() as $layout): ?>
                <?php if(count($layout->columns()) < 2): ?>
                <?php foreach ($layout->columns() as $column): ?>
                    <?php foreach($column->blocks() as $block): ?>
                    <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
                    <?php endforeach ?>
                <?php endforeach ?>
                <?php else: ?>
                    <div class="two-col">
                <?php foreach($layout->columns() as $column): ?>
                    <div class="col">
                        <?php foreach ($column->blocks() as $block): ?>
                            <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?>   
                        </div> 
                <?php endif ?>

            <?php endforeach ?>
        </div>
    </div>
</section>
<section id="reqs" class="list">
    <h2><?= $page->reqtitle() ?></h2>
    <ul class="content-sm">
        <?php foreach($reqs as $req): ?>
            <?php if($req->notes()->isNotEmpty()): ?>
            <li>
            <?php else: ?>
                <li class="nonote">
            <?php endif ?>
                <div class="bullet" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34.19" height="26.07" viewBox="0 0 34.19 26.07"><path d="M.42,24.57c4.46,2.08,18.24-2.19,18.97-14.59,.32-5.52-4.59-11.29-9.49-8.03-4.38,2.92-2.19,22.62,12.4,22.62,7.3,0,10.94-9.49,10.94-9.49" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2"/></svg>
                </div>
                <div class="req">
                <h3><?=$req->req() ?></h3>
                <?php if($req->wordcount()->isNotEmpty()): ?>
                    <p><?= $req->wordcount()?></p>
                <?php endif ?>
                </div>
                <?php if($req->notes()->isNotEmpty()): ?>                
                    <div class="line" aria-hidden="true"></div>
                    <div class="reqnotes">
                    <p><?= $req->notes()->kti()?></p>
                    </div>
                <?php else: ?>
                    <div class="line empty" aria-hidden="true"></div>
                    <div class="reqnotes"></div>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</section>
<section id="timeline" class="list">
    <h2><?= $page->timetitle() ?></h2>
    <ul class="content-sm">
        <?php foreach($dates as $date): ?>
            <li>
                <h3><?= $date->date() ?></h3>
                <p><?= $date->event() ?></p>
            </li>
        <?php endforeach ?>
    </ul>
</section>
<section id="info-sessions">
    <h2><?= $page->infotitle() ?></h2>
    <div class="slider content-wide">
        <div class="carousel session">
            <?php foreach ($infosessions as $info): ?>
                <?php if($info->img()->toFile()->alt()->isNotEmpty()): ?>
                    <?php $infoalt = $info->img()->toFile()->alt(); ?>
                <?php else: ?>
                    <?php $infoalt = "" ?>
                <?php endif ?>
            <div class="slide session">
                <a href="<?= $info->url() ?>" class="carousel-link">
                    <?= $info->headline() ?>
                    <div class="carousel-image">
                        <img src="<?= $info->img()->toFile()->url() ?>" alt=<?= $infoalt ?>>
                    </div>
                </a>
                <p class="carousel-descrip"><?= $info->date()->toDate('m.d.y') ?> – <?= $info->starttime() ?></p>
            </div>
            <?php endforeach ?>
        </div>
        <div class="carousel-controls"></div>
    </div>
</section>
<script type="text/javascript" src="slick/slick.min.js"></script>
<?php snippet('footer') ?>