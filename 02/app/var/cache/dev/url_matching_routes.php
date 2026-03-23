<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category/batch-delete' => [[['_route' => 'admin_category_batch_delete', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/category/autocomplete' => [[['_route' => 'admin_category_autocomplete', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/render-filters' => [[['_route' => 'admin_category_render_filters', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product/batch-delete' => [[['_route' => 'admin_product_batch_delete', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product/autocomplete' => [[['_route' => 'admin_product_autocomplete', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product/render-filters' => [[['_route' => 'admin_product_render_filters', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|category/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:48)'
                                .'|delete(*:61)'
                            .')'
                            .'|(*:69)'
                        .')'
                        .'|product/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:104)'
                                .'|delete(*:118)'
                            .')'
                            .'|(*:127)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:160)'
                                .'|delete(*:174)'
                            .')'
                            .'|(*:183)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|categories/([^/]++)(?'
                            .'|(*:221)'
                        .')'
                        .'|products/([^/]++)(?'
                            .'|(*:250)'
                        .')'
                        .'|users/([^/]++)(?'
                            .'|(*:276)'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:315)'
                .'|/category/([^/]++)(?'
                    .'|(*:344)'
                    .'|/edit(*:357)'
                    .'|(*:365)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:394)'
                    .'|/edit(*:407)'
                    .'|(*:415)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:441)'
                    .'|/edit(*:454)'
                    .'|(*:462)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        61 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        69 => [[['_route' => 'admin_category_detail', '_controller' => 'App\\Controller\\Admin\\CategoryCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CategoryCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        104 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        118 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        127 => [[['_route' => 'admin_product_detail', '_controller' => 'App\\Controller\\Admin\\ProductCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProductCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        160 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        174 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        183 => [[['_route' => 'admin_user_detail', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        221 => [
            [['_route' => 'api_categoriesapp_categoryapi_show', '_controller' => 'App\\Controller\\CategoryApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categoriesapp_categoryapi_update', '_controller' => 'App\\Controller\\CategoryApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_categoriesapp_categoryapi_delete', '_controller' => 'App\\Controller\\CategoryApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        250 => [
            [['_route' => 'api_productsapp_productapi_show', '_controller' => 'App\\Controller\\ProductApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_productsapp_productapi_update', '_controller' => 'App\\Controller\\ProductApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_productsapp_productapi_delete', '_controller' => 'App\\Controller\\ProductApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        276 => [
            [['_route' => 'api_usersapp_userapi_show', '_controller' => 'App\\Controller\\UserApiController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_usersapp_userapi_update', '_controller' => 'App\\Controller\\UserApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_usersapp_userapi_delete', '_controller' => 'App\\Controller\\UserApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        315 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        344 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        357 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        407 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        415 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        454 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        462 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
