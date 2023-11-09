<?php

return function ($page, $pages, $site, $kirby) {
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby')); 

    $faculty = $page->children()->published()->filterBy('template', 'faculty')->filterBy('svapos', 'corefac')->sortBy('lastnamesort');
    $lecturers = $page->children()->published()->filterBy('template', 'faculty')->filterBy('svapos', 'otherlec')->sortBy('lastnamesort');
    $students = $page->children()->published()->filterBy('template', 'student')->sortBy('lastnamesort');
    $alumni = $page->children()->published()->filterBy('intendedtemplate', 'alumnus')->sortBy('lastnamesort');

    return A::merge($shared, compact('faculty', 'lecturers', 'students', 'alumni'));

};