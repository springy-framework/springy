<?php

return [
    /**
     * The template driver name.
     *
     * There are drivers for two template engines:
     *
     * 'smarty' : Smarty
     * 'twig'   : Twig
     */
    'driver' => 'smarty',

    'paths' => [
        /**
         * The root path of the view templates.
         */
        'root' => __DIR__.'/../app/Views',

        /**
         * Path to view templates of the HTTP error pages.
         */
        'errors' => __DIR__.'/../app/Views/Errors',
    ],
];
