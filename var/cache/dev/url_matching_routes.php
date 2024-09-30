<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/provincia/add' => [[['_route' => 'add_new_provincia', '_controller' => 'App\\Controller\\ProvinciaController::addProvincia'], null, null, null, false, false, null]],
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
                .'|/provincia(?'
                    .'|(?:/(\\d+))?(*:31)'
                    .'|/(?'
                        .'|update/([^/]++)(*:57)'
                        .'|delete/([^/]++)(*:79)'
                    .')'
                .')'
                .'|/user(?'
                    .'|(?:/(\\d+))?(*:107)'
                    .'|/(?'
                        .'|update/([^/]++)(*:134)'
                        .'|delete/([^/]++)(*:157)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:198)'
                    .'|wdt/([^/]++)(*:218)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:264)'
                            .'|router(*:278)'
                            .'|exception(?'
                                .'|(*:298)'
                                .'|\\.css(*:311)'
                            .')'
                        .')'
                        .'|(*:321)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'provincia_info', 'id' => '1', '_controller' => 'App\\Controller\\ProvinciaController::getProvinciaById'], ['id'], null, null, false, true, null]],
        57 => [[['_route' => 'update_provincia_name', '_controller' => 'App\\Controller\\ProvinciaController::updateUserName'], ['id'], null, null, false, true, null]],
        79 => [[['_route' => 'delete_provincia', '_controller' => 'App\\Controller\\ProvinciaController::deleteUser'], ['id'], null, null, false, true, null]],
        107 => [[['_route' => 'user_info', 'id' => '1', '_controller' => 'App\\Controller\\UserController::getUserById'], ['id'], null, null, false, true, null]],
        134 => [[['_route' => 'update_user_name', '_controller' => 'App\\Controller\\UserController::updateUserName'], ['id'], null, null, false, true, null]],
        157 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        198 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        218 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        264 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        278 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        298 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        311 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        321 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
