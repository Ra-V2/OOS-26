<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/products' => [
            [['_route' => 'api_productsapp_productapi_index', '_controller' => 'App\\Controller\\ProductApiController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_productsapp_productapi_create', '_controller' => 'App\\Controller\\ProductApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/products/([^/]++)(?'
                    .'|(*:67)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [
            [['_route' => 'api_productsapp_productapi_show', '_controller' => 'App\\Controller\\ProductApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_productsapp_productapi_update', '_controller' => 'App\\Controller\\ProductApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_productsapp_productapi_delete', '_controller' => 'App\\Controller\\ProductApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
