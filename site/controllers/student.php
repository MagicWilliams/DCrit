<?php

return function($page, $pages, $site, $kirby) {
    $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby')); 
    if($page->img()->isNotEmpty()) {
        $img = $page->img()->toFile();
        $imgurl = $img->url();
        if($img->alt()->isNotEmpty()) {
            $imgalt = $img->alt();
        } else {
            $imgalt = '';
        }
    } else {
        $imgurl = kirby()->urls()->assets() . '/images/dcrit-logo-ls.svg';
        $imgalt = '';
    }

    if($page->contact()->isNotEmpty()) {
        $contactlist = $page->contact()->toStructure();
        $contacts = [];
        foreach($contactlist as $contactlink) {
            $text = $contactlink->linktext();
            if($contactlink->contacttype() == 'Email') {
                $url = "mailto:{$text}";
            } else {
                $pagename = $page->title();
                if($contactlink->linktype() == "Website") {
                    $srtext = "<span class='sr-only'>Visit {$pagename}'s website:&nbsp;</span>";
                } elseif($contactlink->linktype() == "Instagram") {
                   $srtext = "<span class='sr-only'>Follow {$pagename} on Instagram:&nbsp;</span>";
                } elseif($contactlink->linktype() == "Twitter") {
                    $srtext = "<span class='sr-only'>Follow {$pagename} on Twitter:&nbsp;</span>";
                } elseif($contactlink->$linktype() == "Facebook") {
                    $srtext = "<span class='sr-only'>Follow {$pagename} on Facebook:&nbsp;</span>";
                }
                $text = $srtext . $text;
                $url = $contactlink->linkurl();
            }

            $contact = [
                "text" => $text,
                "url" => $url
            ];
            $contacts[] = $contact;
        }
    } else {
        $contacts = '';
    }

return A::merge($shared, compact('contacts', 'imgurl', 'imgalt')); 

};