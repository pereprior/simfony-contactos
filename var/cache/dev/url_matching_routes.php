<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/job/add' => [[['_route' => 'add_new_job', '_controller' => 'App\\Controller\\JobController::addJob'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_page_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/add' => [[['_route' => 'add_new_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/job(?'
                    .'|(?:/(\\d+))?(*:25)'
                    .'|/(?'
                        .'|update/([^/]++)(*:51)'
                        .'|delete/([^/]++)(*:73)'
                    .')'
                .')'
                .'|/user(?'
                    .'|(?:/(\\d+))?(*:101)'
                    .'|/(?'
                        .'|update/([^/]++)(*:128)'
                        .'|delete/([^/]++)(*:151)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:192)'
                    .'|wdt/([^/]++)(*:212)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:258)'
                            .'|router(*:272)'
                            .'|exception(?'
                                .'|(*:292)'
                                .'|\\.css(*:305)'
                            .')'
                        .')'
                        .'|(*:315)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'job_info', 'id' => '1', '_controller' => 'App\\Controller\\JobController::getJobById'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'update_job_name', '_controller' => 'App\\Controller\\JobController::updateJobName'], ['id'], null, null, false, true, null]],
        73 => [[['_route' => 'delete_job', '_controller' => 'App\\Controller\\JobController::deleteJob'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'user_info', 'id' => '1', '_controller' => 'App\\Controller\\UserController::getUserById'], ['id'], null, null, false, true, null]],
        128 => [[['_route' => 'update_user_name', '_controller' => 'App\\Controller\\UserController::updateUserName'], ['id'], null, null, false, true, null]],
        151 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        192 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        212 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        258 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        272 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        292 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        305 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        315 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
