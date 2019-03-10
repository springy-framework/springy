<?php

return [
    /**
     * Application debug mode.
     *
     * When the application is in debug mode, erros messages, debug traces
     * and other debug informations will be shown.
     */
    'debug' => true,

    /**
     * Mail address to notify about errors in the application.
     */
    'errors_go_to' => '',

    /**
     * Authentication driver configuration.
     */
    'authentication' => [
        /**
         * Password hasher.
         *
         * A string with full namespace of the password hasher class
         * or a Springy\Security\HasherInterface object
         * or a function that returns a Springy\Security\HasherInterface object
         *
         * Default: 'Springy\Security\BCryptHasher'
         */
        'hasher' => 'Springy\Security\BCryptHasher',

        /**
         * Authentication driver.
         *
         * A Springy\Security\AuthDriver object
         * or a closure function that returns a Springy\Security\AuthDriver object
         *
         * The sample function is de default and is good enough for many projects.
         */
        'driver' => function ($data) {
            $hasher = $data['user.auth.hasher'];
            $user = $data['user.auth.identity'];

            return new AuthDriver($hasher, $user);
        },

        /**
         * Authentication identity.
         *
         * A string with full namespace of the authentication identity class
         * or a Springy\Security\IdentityInterface object
         * or a function that returns a Springy\Security\IdentityInterface object
         */
        'identity' => null,
    ],
];
