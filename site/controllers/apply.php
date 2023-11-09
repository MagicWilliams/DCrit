<?php

return function($page, $site, $pages, $kirby) {
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby')); 

    $reqs = $page->reqs()->toStructure();
    $dates = $page->dates()->toStructure();

    $infosessions = $site->index()->findBy("intendedTemplate", "events")->children()->filterBy("infosession", "true")->sortBy('date')->flip();

return A::merge($shared, compact('reqs', 'dates', 'infosessions'));
};