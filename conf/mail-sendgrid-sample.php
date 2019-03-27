<?php
/**
 * Sample configuration file for SendGrid driver.
 */

return [
    /*
     * Mailer driver name.
     */
    'driver' => 'sendgrid',

    /*
     * Fake e-mail destination.
     *
     * Tells the application to send all messages to a certain e-mail
     * address instead of the actual recipient.
     */
    'fake_to' => env('FAKE_MAIL_TO', ''),

    /*
     * Settings for mailer driver.
     */
    'settings' => [
        /*
         * Your SendGrid API Key.
         */
        'apikey' => env('SENDGRID_API_KEY', 'or-put-your-sendgrid-api-key-here'),

        /*
         * SendGrid object options.
         */
        'options' => [
            /*
             * The transport protocol.
             */
            'protocol' => 'https',

            /*
             * Exception raise on error.
             */
            'raise_exceptions' => false,

            /*
             * Turns off SSL verification.
             */
            'turn_off_ssl_verification' => false,
        ],
    ],
];
