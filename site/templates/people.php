<?php snippet('header', ['navhome' => $navhome, 'navapply' => $navapply, 'navprogram' => $navprogram, 'navpeople' => $navpeople, 'navintensive' => $navintensive]) ?>
<div class="page-title">
    <h1><span class="sr-only">D-Crit</span> <?= $page->title() ?></h1>
</div>
<div class="main-content">
<div class="img-container" id="people-img" tabindex="-1">
    <img src="<?= $page->hero()->toFile()->url()?>" alt="">
</div>
<nav class="people-nav" aria-label="People at D-Crit">
    <ul role="tablist" aria-label="People by D-Crit Status">
        <li><button role="tab" class="active faculty people-toggle" id="toggle1" aria-controls="faculty" aria-selected="true" tabindex="0"><?= $page->factoggle() ?></button></li>
        <li><button role="tab" class="people-toggle students" id="toggle2" aria-controls="students" aria-selected="false" tabindex="-1"><?= $page->stutoggle() ?></button>
        <li><button role="tab" class="people-toggle alumni" id="toggle3" aria-controls="alumni" aria-selected="false" tabindex="-1"><?= $page->alumtoggle() ?></button>
    </ul>
</nav>
<div class="sr-only skip-link" id="main-content"></div>
<section id="faculty" class="people active" aria-labelledby="toggle1" role="tabpanel" tabindex="0">
    <h2 class="sr-only"><?= $page->factoggle() ?></h2>
    <div class="facsection">
        <h3><?= $page->facsec() ?></h3>
        <ul class="content-wide" aria-label="Accordion Button Group">
        <?php $index=0; ?>
        <?php foreach($faculty as $fac): ?>
            <li class="person bio">
                <div class="bio">
                    <div class="bio-head">
                        <h4><button id="fac<?= strval($index+1) ?>" aria-controls="facbio<?= strval($index+1) ?>" aria-expanded="false"><?= $fac->title() ?></button></h4>
                        <p><?= $fac->role() ?></p>
                        <div class="accordion" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25"><path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/></svg>
                        </div>
                    </div>
                    <div class="bio-text" id="facbio<?= strval($index+1) ?>" aria-labelledby="fac<?= strval($index+1) ?>">
                        <?= $fac->bio()->kt() ?>
                    </div>
                </div>
                <?php if($fac->img()->isNotEmpty()): ?>
                    <div class="img-container">
                        <img src="<?= $fac->img()->toFile()->url() ?>" alt="<?= $fac->img()->toFile()->alt() ?>">
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
    </div>
    <div class="facsection">
        <h3><?= $page->lecsec() ?></h3>
        <div class="content-wide">
        <?php $index=0; ?>
        <?php foreach($lecturers as $lec): ?>
            <div class="person bio">
                <?php if($lec->img()->isNotEmpty()): ?>
                    <div class="img-container">
                        <img src="<?= $lec->img()->toFile()->url() ?>" alt="<?= $lec->img()->toFile()->alt() ?>">
                    </div>
                <?php else: ?>
                    <div class="img-container">
                        <div class="img-placeholder">
                        <img src="<?php echo kirby()->urls()->assets() . '/images/dcrit-logo-ls.svg'?>" alt="">
                        </div>
                    </div>
                <?php endif ?>

                <div class="bio">
                    <div class="bio-head">
                        <h4><button id="lec<?= strval($index+1) ?>" aria-controls="lecbio<?= strval($index+1) ?>" aria-expanded="false"><?= $lec->title() ?></h4>
                        <p><?= $lec->role() ?></p>
                        <div class="accordion">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25"><path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/></svg>
                        <span class="sr-only"></span>
                        </div>
                    </div>
                    <div class="bio-text" id="lecbio<?= strval($index+1) ?>" aria-labelledby="lec<?= strval($index+1) ?>">
                        <?= $lec->bio()->kt() ?>
                    </div>
                </div>
            </div>
            <?php $index++; ?>
        <?php endforeach ?>
        </div>
    </div>
    <div class="facsection list">
        <h3><button aria-expanded="false" id="guest-toggle" class="list-toggle" aria-controls="guestlist"><?= $page->guestsec() ?></button></h3>
        <div class="content-wide acc">
            <div id="guestlist" aria-labelledby="guest-toggle">
                <?= $page->guestspeakers() ?>
            </div>
            <div class="accordion" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25"><path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/></svg>
            </div>
        </div>
    </div>
</section>
<section id="students" class="people" role="tabpanel" aria-labelledby="toggle2" tabindex="0">
    <h2 class="sr-only"><?= $page->stutoggle() ?></h2>
    <h3><?= $page->studenttitle() ?></h3>
    <ul class="content-wide" aria-label="Accordion Button Group">
    <?php $index=0; ?>
    <?php foreach($students as $student): ?>
        <li class="person bio">
            <div class="bio">
                <div class="bio-head">
                    <h4><button id="student<?= strval($index+1) ?>" aria-controls="stbio<?= strval($index+1) ?>" aria-expanded="false"><?= $student->title() ?></h4>
                    <p><?= $student->role() ?></p>
                    <div class="accordion">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.31 15.25"><path d="M19.28,8.29L38.31,0V1.82L19.28,15.25,0,1.82V0L19.28,8.29Z"/></svg>
                    </div>
                </div>
                <div class="bio-text" id="stbio<?= strval($index+1) ?>" aria-labelledby="student<?= strval($index+1) ?>">
                <?= $student->bio()->kt() ?>
                </div>
            </div>
            <?php if($student->img()->isNotEmpty()): ?>
                <div class="img-container">
                    <img src="<?= $student->img()->toFile()->url() ?>" alt="<?= $student->img()->toFile()->alt() ?>">
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
<section id="alumni" class="people" role="tabpanel" aria-labelledby="toggle3" tabindex="0">
    <h2 class="sr-only"><?= $page->alumtoggle() ?></h2>
    <div class="content-wide alum">
        <?php $index = 0; ?>
        <?php foreach($alumni as $alum): ?>
            <div class="person">
                <?php if($alum->img()->isNotEmpty()): ?> 
                    <div class="img-container">
                        <img src="<?= $alum->img()->toFile()->url() ?>" alt="<?= $alum->img()->toFile()->alt() ?>">
                    </div>
                <?php else: ?>
                    <div class="img-placeholder">
                        <img src="<?php echo kirby()->urls()->assets() . '/images/dcrit-logo-ls.svg'?>" alt="">
                    </div>
                <?php endif ?>
                <div class="alum-text">
                    <h3 id="alum<?= strval($index+1) ?>"><?= $alum->title() ?></h3>
                    <div class="alum-info">
                        <p>Class of <?= $alum->gradyear() ?></p>
                        <?php if($alum->hometown()->isNotEmpty()): ?>
                        <p><?= $alum->hometown() ?></p>
                        <?php endif ?>
                        <?php if($alum->link()->isNotEmpty() && $alum->linktext()->isNotEmpty()): ?>
                            <?php if($alum->linktype() == "website"): ?>
                        <p><a href="<?= $alum->link() ?>" class="external-link" aria-labelledby="alum<?= strval($index+1) ?>"><?= $alum->linktext() ?></a>
                        <?php elseif($alum->linktype() == "fb"): ?>
                            <p><a href="<?= $alum->link() ?>" class="external-link"><span class="sr-only">Follow <?= $alum->title() ?> on Facebook:&nbsp;</span><?= $alum->linktext() ?></a>
                        <?php elseif($alum->linktype() == "tw"): ?>
                            <p><a href="<?= $alum->link() ?>" class="external-link"><span class="sr-only">Follow <?= $alum->title() ?> on Twitter:&nbsp;</span><?= $alum->linktext() ?></a>
                        <?php elseif($alum->linktype() == "insta"): ?>
                            <p><a href="<?= $alum->link() ?>" class="external-link"><span class="sr-only">Follow <?= $alum->title() ?> on Instagram:&nbsp;</span><?= $alum->linktext() ?></a>
                        <?php endif ?>
                            <?php if($alum->thesis()->isNotEmpty()): ?>
                            &nbsp;/&nbsp;<a href="<?= $alum->thesis() ?>" class="external-link" aria-labelledby="alum<?= strval($index+1) ?>">Thesis</a></p>
                            <?php else: ?>
                            </p>
                            <?php endif ?>
                        <?php elseif($alum->thesis()->isNotEmpty()): ?>
                        <p><a href="<?= $alum->thesis() ?>" class="external-link">Thesis</a></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php $index++; ?>
        <?php endforeach ?>
    </div>
</section>

</div>
<?php snippet('footer') ?>