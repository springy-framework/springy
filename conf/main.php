<?php
/**
 * Springy Framework general configuration file.
 */

return [
    /**
     * The application configuration.
     */
    'app' => [
        /**
         * The application name.
         */
        'name' => 'Springy',

        /**
         * The application version.
         */
        'version' => [1, 0, 0],

        /**
         * The project code name.
         */
        'code_name' => 'Alpha',
    ],

    /**
     * The application environment.
     */
    'environment' => env('SPRINGY_ENVIRONMENT', 'development'),

    /**
     * The default application charset.
     */
    'charset' => 'UTF-8',

    /**
     * The system time zone.
     */
    'timezone' => 'UTC',

    /**
     * The errors log path.
     */
    'errors_log' => __DIR__.'/../var/log/errors',

    /**
     * The configuration files path.
     */
    'config_path' => __DIR__,
];
