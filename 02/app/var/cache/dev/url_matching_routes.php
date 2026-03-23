<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/categories' => [
            [['_route' => 'api_categoriesapp_categoryapi_index', '_controller' => 'App\\Controller\\CategoryApiController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_categoriesapp_categoryapi_create', '_controller' => 'App\\Controller\\CategoryApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/products' => [
            [['_route' => 'api_productsapp_productapi_index', '_controller' => 'App\\Controller\\ProductApiController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_productsapp_productapi_create', '_controller' => 'App\\Controller\\ProductApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/users' => [
            [['_route' => 'api_usersapp_userapi_index', '_controller' => 'App\\Controller\\UserApiController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_usersapp_userapi_create', '_controller' => 'App\\Controller\\UserApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|categories/([^/]++)(?'
                        .'|(*:72)'
                    .')'
                    .'|products/([^/]++)(?'
                        .'|(*:100)'
                    .')'
                    .'|users/([^/]++)(?'
                        .'|(*:126)'
                    .')'
                .')'
                .'|/category/([^/]++)(?'
                    .'|(*:157)'
                    .'|/edit(*:170)'
                    .'|(*:178)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:207)'
                    .'|/edit(*:220)'
                    .'|(*:228)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:254)'
                    .'|/edit(*:267)'
                    .'|(*:275)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [
            [['_route' => 'api_categoriesapp_categoryapi_show', '_controller' => 'App\\Controller\\CategoryApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categoriesapp_categoryapi_update', '_controller' => 'App\\Controller\\CategoryApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_categoriesapp_categoryapi_delete', '_controller' => 'App\\Controller\\CategoryApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        100 => [
            [['_route' => 'api_productsapp_productapi_show', '_controller' => 'App\\Controller\\ProductApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_productsapp_productapi_update', '_controller' => 'App\\Controller\\ProductApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_productsapp_productapi_delete', '_controller' => 'App\\Controller\\ProductApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        126 => [
            [['_route' => 'api_usersapp_userapi_show', '_controller' => 'App\\Controller\\UserApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_usersapp_userapi_update', '_controller' => 'App\\Controller\\UserApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_usersapp_userapi_delete', '_controller' => 'App\\Controller\\UserApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        157 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        170 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        178 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
