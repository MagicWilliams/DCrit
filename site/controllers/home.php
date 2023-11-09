<?php

return function ($page, $site, $pages, $kirby) {
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby')); 

    if($page->toggle() == "Image") {
        $landing = $page->hero()->toFile();
    } elseif($page->toggle() == "Video") {
        $landing = $page->embed();
    } else {
        $landing = "";
    }

    $shortcuts = $page->learnmore()->toStructure();

    if($page->featuretype() == "None" || $page->featuretype() == "Custom") {
        $html = false;
    } elseif($page->featuretype() == "Event") {
        $feature = $page->event()->toPage();
        $eventlink = $feature->url();
        $eventname = $feature->headline();
        $eventdatestamp = $feature->date()->toDate();
        $eventdate = date('D, M j, ', $eventdatestamp);
        $eventtime = $feature->starttime();
        $descrip = $feature->shortdescrip()->kt();
        $register = $feature->link();
        $eventimg = $feature->img()->toFile()->url();
        $eventalt = $feature->img()->toFile()->alt();
        $eventcap = $feature->img()->toFile()->caption();

        $html = "
        <h2><span>Featured</span><div class='squig-container' aria-hidden='true'><span class='squiggle'></span><span class='squiggle'></span></div><span>Event</span></h2>
        <div class='ftevent'>
        <div class='text'>
            <a href='{$eventlink}'><h3><span class='sr-only'>Event Page: </span>{$eventname}</h3>
                <div aria-hidden='true' tabindex='-1' class='svg-container'>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 401 108.01'>
                    <path d='M3.7,53.51s0-0,98.5-0c91,0,107,0,194,0,60,0,108.5-0,108.5-0' fill='none' stroke='#000' stroke-miterlimit='10' stroke-width='9'/>
                    </svg>
                </div>
            </a>
            <p class='date'>{$eventdate}{$eventtime}</p>
            <p>{$descrip}</p>
            <a class='button' href='{$register}'>Register <span class='sr-only'>on Eventbrite</span></a>
        </div>
        <div class='img-container'>
            <img src='{$eventimg}' alt='{$eventalt}'>
        </div>
        </div>
        ";
    } elseif($page->featuretype() == "Update") {
        $feature = $page->atlarge()->toPage();
        $instaimg = $feature->img()->toFile()->url();
        $fttext = $feature->featureline()->kti();
        if($feature->link()->isNotEmpty()) {
            $instalink = $feature->link();
            if($feature->acclink()->isNotEmpty()) {
                $ftalt = $feature->acclink();
            } elseif($feature->img()->toFile()->alt()->isNotEmpty()) {
                $ftalt = $feature->img()->toFile()->alt();
            } else {
                $ftalt = '';
            }
        }
        $html = "
        <h2><span>Featured</span><div class='squig-container' aria-hidden='true'><span class='squiggle'></span><span class='squiggle'></span></div><span>Update</span></h2>
        <div class='content-sm ft-al'>
        <figure class='img-container'>
            <a class='ftlink' href='{$instalink}'>
                <img alt='{$ftalt}' src='{$instaimg}'><span class='uplink external-link' aria-hidden='true'>Learn More</span><div aria-hidden='true' tabindex='-1' class='ft-al svg-container sprint'>
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 401 108.01'>
                <path d='M.76,53.51s251.69,43.08,255-33c2-46-221,17-106,65,128,46,254-32,254-32' fill='none' stroke='#000' stroke-miterlimit='10' stroke-width='9'/>
                </svg>
            </div>
            </a>
            <figcaption>{$fttext}</figcaption>
        </figure>
        </div>
        ";
    } elseif($page->featuretype() == "Read") {
        $feature = $page->read()->toPage();
        $readtitle = $feature->headline();
        $readauthor = $feature->author();
        if ($feature->authorlink()->isNotEmpty()) {
            $authorlink = $feature->authorlink();
        } else {
            $authorlink = "";
        }
        $blurb = $feature->blurb()->kt();
        $readlink = $feature->link();
        $readimage = $feature->img()->toFile()->url();
        $readalt = $feature->img()->toFile()->alt();
        $readcap = $feature->img()->toFile()->caption();
        $html = "
        <h2><span>Featured</span><div class='squig-container' aria-hidden='true'><span class='squiggle'></span><span class='squiggle'></span></div><span>Read</span></h2>
        <div class='content-sm ftread'>
            <h3>{$readtitle}</h3>
            <div class='readinfo'>
            <p><a class='authorlink' href={$authorlink}><span class='sr-only'>Author Bio:&nbsp;</span>{$readauthor}</a></p>
            </div>
            <figure class='img-container'>
                <img src='{$readimage}' alt='{$readalt}'>
                <figcaption class='imgcap'>{$readcap}</figcaption>
            </figure>
            <div class='blurb'>
                {$blurb}
                <a class='external-link' href='{$readlink}'>Read More<span class='sr-only'>&nbsp;on Medium</span></a>
            </div>
        </div>
        ";
    } 

    $postlist = $site->index()->findBy("intendedtemplate", "atlarge")->children()->flip();
    $posts = [];

    foreach ($postlist as $post) {
        if($post->img()->isNotEmpty() || $post->vid()->isNotEmpty()) {
            if($post->img()->isNotEmpty()) {
                $testalt = $post->img()->toFile()->alt();
            }
            $posts[] = $post;
        }

        if(sizeof($posts) > 1 || sizeof($posts) === sizeof($postlist)) {
            break;
        }
    }

    $articles = $site->index()->findBy("intendedTemplate", "reads")->children()->limit(3);

    $events = $site->index()->findBy("intendedTemplate", "events")->children()->sortBy('date')->flip();

    

    return A::merge($shared, compact('html', 'landing', 'shortcuts', 'posts', 'articles', 'events'));
};