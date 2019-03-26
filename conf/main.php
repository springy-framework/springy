<?php
/**
 * Springy Framework main configuration file.
 *
 * ==========================================
 *
 * This configuration file will be read only once on
 * the application startup.
 *
 * If there is other files named main.php under subdirectories
 * it will be ignored.
 */

return [
    /**
     * The application configuration.
     *
     * @var array
     */
    'app' => [
        /**
         * The application name.
         *
         * @var string
         */
        'name' => 'Springy',

        /**
         * The application version.
         *
         * An array with major, minor and revision integers
         * that forms the application version.
         *
         * @var array
         */
        'version' => [1, 0, 0],

        /**
         * The project code name.
         *
         * @var string
         */
        'code_name' => 'Alpha',
    ],

    /**
     * The application environment.
     *
     * Can be setted in system environment variable or local.
     *
     * @var string
     */
    'environment' => env('SPRINGY_ENVIRONMENT', 'development'),

    /**
     * The default application charset.
     *
     * Default: 'UTF-8'
     *
     * @var string
     */
    'charset' => 'UTF-8',

    /**
     * The system time zone.
     *
     * Default: 'UTC'
     *
     * @var string
     */
    'timezone' => 'UTC',

    /**
     * The errors log folder path.
     *
     * @var string
     */
    'errors_log' => __DIR__.'/../var/log/errors',

    /**
     * The webmaster email to report about application errors.
     *
     * If the value is an array, will send the alert for all
     * of them, but the first will be used as sender of the message.
     *
     * @var string|array
     */
    'errors_reporting' => env('WEBMASTER_EMAIL', ''),

    /**
     * List of errors that should not be logged nor reported.
     *
     * @var array
     */
    'unreportable_errors' => [
        Springy\Exceptions\Http403Error::class,
        Springy\Exceptions\Http404Error::class,
        Springy\Exceptions\Http503Error::class,
    ],

    /**
     * The configuration folder path.
     *
     * Default: current folder
     *
     * @var string
     */
    'config_path' => __DIR__,
];
