<?php

return function ($page, $site, $pages, $kirby) {
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby')); 
    $courses = $page->children()->listed()->filterBy('intendedTemplate', 'course');

    $fall = [];
    $spring = [];

    foreach($courses as $course) {
        $instructors = "";
        foreach($course->instructors()->toStructure() as $instructor) {
            $name = $instructor->instructor()->toPage()->title();
            $link = $instructor->instructor()->toPage()->url();
            $instructors .= "<a href='{$link}'>{$name}</a>";
        }
        $courseinfo = [
            'title' => $course->coursetitle(),
            'instructors' => $instructors,
            'day' => $course->day(),
            'time' => $course->time()->toDate('g:iA'),
            'description' => $course->descrip()->kt()
        ];

        if(strtolower($course->semester()) == 'fall') {
            $fall[] = $courseinfo;
        } else {
            $spring[] = $courseinfo;
        }
    }

return A::merge($shared, compact('fall', 'spring'));

};