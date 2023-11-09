<?php

return function ($page, $site, $pages, $kirby) {
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby')); 
    $courses = $page->children()->listed()->filterBy('intendedTemplate', 'summercourse');
    
    $participantlist = $page->children()->listed()->filterBy('intendedTemplate', 'participant');

    $participants = [];

    foreach($participantlist as $participant) {
        if($participant->img()->isNotEmpty()) {
            $parimg = $participant->img()->toFile();
        } else {
            $parimg = '';
        }
        $parinfo = [
            'name' => $participant->title(),
            'role' => $participant->role(),
            'bio' => $participant->bio()->kt(),
            'parimg' => $parimg
        ];
        
        $participants[] = $parinfo;
    }

    $courselist = [];

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
            'description' => $course->descrip()->kt()
        ];

        $courselist[] = $courseinfo;

    }

    $instructorlist = $page->instructors()->toStructure();

    $faculty = [];

    foreach($instructorlist as $ins) {
        $facpage = $ins->instructor()->toPage();
        if($facpage->img()->isNotEmpty()) {
            $img = $facpage->img()->toFile();
        } else {
            $img = '';
        }
        $fac = [
            'name' => $facpage->title(),
            'role' => $facpage->role(),
            'bio' => $facpage->bio(),
            'img' => $img
        ];
        $faculty[] = $fac;
    }


    $testimonials = [];

    foreach($page->testimonials()->toStructure() as $test) {
        if($test->testimg()->isNotEmpty()) {
            $img = $test->testimg()->toFile();
        } else {
            $img = '';
        }
        $testimonial = [
            'img' => $img,
            'txt' => $txt = $test->testimonial()->kt()
        ];

        $testimonials[] = $testimonial;
    }


return A::merge($shared, compact('courselist', 'testimonials', 'faculty', 'participants')); 

};