<?php snippet('header', ['navhome' => $navhome, 'navapply' => $navapply, 'navprogram' => $navprogram, 'navpeople' => $navpeople, 'navintensive' => $navintensive]) ?>
<?= css('@auto') ?>
<div id="impact">
    <h1 class="dcrit" id="dcrit">
        <span class="sr-only">SVA</span>
        <span id="d">D
            <span id="svalogo" aria-hidden="true">
                <img src="<?php echo kirby()->urls()->assets() . '/images/sva-logo.svg' ?>" alt="School of Visual Arts logo">
            </span>
        </span>
        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401 108.01">
            <path d="M3.7,53.51s0-0,98.5-0c91,0,107,0,194,0,60,0,108.5-0,108.5-0" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="9"/>
        </svg>
        <span class="sr-only">-</span><span>CRIT</span>
    </h1>
    <p class="subline">MA Design Research, Writing and Criticism</p>
</div>
<?php if($page->toggle() == "Image"): ?>
    <div class="img-container" id="landingimg" tabindex="-1">
        <img tabindex="-1" src="<?= $landing->url()?>" alt="">
    </div>
<?php elseif($page->toggle() == "Video"): ?>
    <?php $title = $page->embedtitle(); ?>
    <?php $video = Html::video($landing, [], ['title' => $title]); ?>
    <div class="vid-container">
    <figure id="landingvid">
        <?php echo $video; ?>
    </figure>
</div>
<?php endif ?>
<section id="evergreen">
    <h2 class="sr-only">About</h2>
    <p><?= $page->oneliner() ?></p>
    <nav aria-label="site shortcuts" class="shortcut">
        <ul>
        <?php foreach($shortcuts as $shortcut): ?>
            <li>
                <a class="button" href="<?= $shortcut->buttonlink() ?>"><span class="sr-only"><?= $shortcut->acctext() ?></span><span aria-hidden="true"><?= $shortcut->buttontext() ?></span></a>
            </li>
        <?php endforeach ?>
        </ul>
    </nav>
</section>
<div class="sr-only" id="main-content"></div>
<?php if($html): ?>
    <section class="feature" id="feature">
            <?php echo $html ?>
    </section>
<?php else: ?>
    <?php if($page->featuretype() == 'Custom'): ?>
        <section class="feature" id="feature">
        <?php if ($page->customlabel()->isEmpty()): ?>
            <?php $ftlabel = "Content"; ?>
        <?php else: ?>
            <?php $ftlabel = $page->customlabel(); ?>
        <?php endif ?>
        <h2><span>Featured</span><div class='squig-container' aria-hidden='true'><span class='squiggle'></span><span class='squiggle'></span></div><span><?= $ftlabel ?></span></h2>
        <div class="content-sm ftcustom">
        <?php foreach($page->generic()->toBlocks() as $block): ?>
            <div class="block block-type-<?= $block->type() ?>"><?= $block ?></div>
        <?php endforeach ?>
        </div>
        </section>
    <?php endif ?>
<?php endif ?>
<section id="updates">
    <h2>Updates</h2>
    <div class="content-wide">
        <div class="posts">
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h3 class="sr-only"><?= $post->title() ?></h3>
                <?php if($post->mediaselect() == 'Image'): ?>
                    <?php if($post->acclink()->isNotEmpty()): ?>
                        <?php $acclink = $post->acclink(); ?>
                    <?php elseif($post->img()->isNotEmpty()): ?>
                        <?php if($post->img()->toFile()->alt()->isNotEmpty()): ?>
                            <?php $acclink = $post->img()->toFile()->alt(); ?>
                        <?php else: ?>
                            <?php $acclink = ""; ?>
                        <?php endif ?>
                    <?php else: ?>
                        <?php $acclink = ""; ?>
                    <?php endif ?>
                <figure>
                <a class="post-img" href="<?= $post->link() ?>">
                    <?php if($post->img()->isNotEmpty()): ?>
                    <img src="<?= $post->img()->toFile()->url() ?>" alt="<?= $acclink ?>">
                    <span aria-hidden="true" class="external-link">Learn More</span>
                    <?php endif ?>
                </a>
                <figcaption>
                    <?= $post->featureline()->kirbytextinline() ?>
            </figcaption>
                </figure>
                <?php else: ?>
                    <?php if($embed = $post->vid()->toEmbed()): ?>
                        <figure>
                        <div class="vid-container">
                            <?php echo $embed->code() ?>
                        </div>
                        <figcaption><?= $post->vidcaption()->kti() ?></figcaption>
                    </figure>
                    <?php endif ?>
                <?php endif ?>
        </div>
        <?php endforeach ?>
        </div>
    </div>
</section>
<section id="reads">
    <h2>Reads</h2>
    <div class="content-wide">
        <?php foreach ($articles as $article): ?>
            <div class="read">
            <h3><a class="external-link" href="<?= $article->link() ?>"><span class="sr-only">Read</span><span class="article-title"><?= $article->headline() ?></span><span class="sr-only">on Medium</span></a></h3>
            <p><?= $article->date()->toDate('m.d.y') ?><span class="mobi" aria-hidden="true"></span><br><a class="authorlink" href='<?= $article->authorlink() ?>'><span class="sr-only">Author Bio:&nbsp;</span><?= $article->author() ?></a></p>

        </div>
        <?php endforeach ?>
        <div class="right-align more">
            <a class="external-link" href="https://dcrit.medium.com/">
                More on Medium<span class="underline"></span>
            </a>
        </div>

    </div>
</section>
<section id="events">
    <h2>Events</h2>
    <div class="slider content-wide">
        <div class="carousel">
            <?php $i=0; ?>
            <?php $eventCount=count($events) ?>
            <?php foreach ($events as $event): ?>
                <?php if($i % 4 === 0): ?>
                    <div class="slide">
                        <div class="slide-container">
                <?php endif ?>
                <div class="event-item">
                    <div class="event-image">
                        <img src="<?= $event->img()->toFile()->url() ?>" alt="<?= $event->img()->toFile()->alt() ?>">
                    </div>
                    <div class="event-info">
                        <a href="<?= $event->url() ?>"><?= $event->headline() ?></a>
                        <p><?= $event->date()->toDate('m.d.y') ?> – <?= $event->starttime() ?></p>
                    </div>
                </div>
                <?php if((($i + 1) % 4 === 0) ||$i === $eventCount - 1): ?>
                </div>
                </div>
                <?php endif ?>
            <?php $i++; ?>
            <?php endforeach ?>
        </div>
        <div class="carousel-controls">
        </div>
    </div>
</section>
<script>
    $("a").each(function() {
        if(this.host !== window.location.host && !$(this).hasClass("external-link") && $(this).attr('href') && !$(this).hasClass('authorlink')) {
            if($(this).children().first().is("img")) {
                return
            } else {
                $(this).addClass("external-link");
            }

        }
    });
</script>



<?php snippet('footer') ?>