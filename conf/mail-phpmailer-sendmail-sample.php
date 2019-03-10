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
        'protocol' => 'sendmail',

        /**
         * Debug level.
         */
        'debug' => 0,
    ],
];
