<?php

return function ($page, $pages, $site, $kirby) {
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby')); 
    $datestore = $page->date()->toDate('Ymd');
    $datecheck = new DateTime($datestore);
    $now = new DateTime();

    if($datecheck > $now) {
        $reglink = true;
    } else {
        $reglink = false;
    }

    $date = date('D, M j,', $page->date()->toDate());
    $starttime = $page->starttime();
    $byline = $date . ' ' . $starttime;
    
    if($page->endtime()->isNotEmpty()) {
        $endtime = $page->endtime();
        $byline = $byline . ' – ' . $endtime;
    }

    if($page->documentation()->isNotEmpty()) {
        if($page->watchhost() == "Vimeo") {
            $watchlink = "the event recording on Vimeo";
        } elseif($page->watchhost() == "YouTube") {
            $watchlink = "the event recording on YouTube";
        } else {
            $watchlink = "the event recording";
        }
    } else {
        $watchlink = '';
    } 

    if($page->link()->isNotEmpty()) {
        if($page->linkhost()->isNotEmpty() && strtolower($page->linkhost()) !== "eventbrite") {
            $linkhost = $page->linkhost();
        } else {
            $linkhost = "Eventbrite";
        }
    } else {
        $linkhost = '';
    }

    return A::merge($shared, compact('byline', 'reglink', 'watchlink', 'linkhost'));

};

