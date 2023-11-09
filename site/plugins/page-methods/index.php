<?php

Kirby::plugin('my/page-methods', [
    'pageMethods' => [
        'lastnamesort' => function () {
                $pieces = explode(' ', $this->title());
                $lastname = array_pop($pieces);
                return $lastname;
            }
    ]
]);