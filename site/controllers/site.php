<?php

return function ($page, $pages, $site, $kirby) {

  $navhome = $site->find("home")->url();
  $navapply = $site->find("apply")->url();
  $navprogram = $site->find("program")->url();
  $navpeople = $site->find("people")->url();

  $progpage = $site->find("program");
  $navintensive = $progpage->find("summer-intensive")->url();

  
    
  return compact('navhome' , 'navapply', 'navprogram', 'navpeople', 'navintensive');

};