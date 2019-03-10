<?php
/**
 * Sample configuration file for PHPMailer driver.
 */

return [
    /**
     * Mailer driver name.
     */
    'driver' => 'phpmailer',

    /**
     * Fake e-mail destination.
     *
     * Tells the application to send all messages to a certain e-mail
     * address instead of the actual recipient.
     */
    'fake_to' => env('FAKE_MAIL_TO', ''),

    /**
     * Settings for mailer driver.
     */
    'settings' => [
        /**
         * The mail transfer protocol.
         */
        'protocol' => 'smtp',

        /**
         * The SMTP host.
         */
        'host' => 'smtp.gmail.com',

        /**
         * The SMTP port.
         */
        'port' => 587,

        /**
         * The SMTP cryptography protocol.
         */
        'cryptography' => 'tls',

        /**
         * SMTP authentication needed.
         */
        'authenticated' => true,

        /**
         * The SMTP user.
         */
        'username' => 'you@gmail.com',

        /**
         * The SMTP password.
         */
        'password' => 'put-your-password-here',

        /**
         * Debug level.
         */
        'debug' => 0,
    ],
];
