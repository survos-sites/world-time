<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
    'bootstrap' => [
        'version' => '5.3.2',
    ],
    '@popperjs/core' => [
        'version' => '2.11.8',
    ],
    'bootstrap/dist/css/bootstrap.min.css' => [
        'version' => '5.3.2',
        'type' => 'css',
    ],
    'bootstrap-icons/font/bootstrap-icons.min.css' => [
        'version' => '1.11.3',
        'type' => 'css',
    ],
    'stimulus-timeago' => [
        'version' => '4.1.0',
    ],
    'date-fns' => [
        'version' => '2.30.0',
    ],
    '@babel/runtime/helpers/esm/typeof' => [
        'version' => '7.23.8',
    ],
    '@babel/runtime/helpers/esm/createForOfIteratorHelper' => [
        'version' => '7.23.8',
    ],
    '@babel/runtime/helpers/esm/assertThisInitialized' => [
        'version' => '7.23.8',
    ],
    '@babel/runtime/helpers/esm/inherits' => [
        'version' => '7.23.8',
    ],
    '@babel/runtime/helpers/esm/createSuper' => [
        'version' => '7.23.8',
    ],
    '@babel/runtime/helpers/esm/classCallCheck' => [
        'version' => '7.23.8',
    ],
    '@babel/runtime/helpers/esm/createClass' => [
        'version' => '7.23.8',
    ],
    '@babel/runtime/helpers/esm/defineProperty' => [
        'version' => '7.23.8',
    ],
];
