<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_page_index', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/contact/add' => [[['_route' => 'add_new_user', '_controller' => 'App\\Controller\\PageController::addUser'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/contact(?'
                    .'|(?:/(\\d+))?(*:29)'
                    .'|/(?'
                        .'|search/([^/]++)(*:55)'
                        .'|update/([^/]++)/([^/]++)(*:86)'
                        .'|delete/([^/]++)(*:108)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:149)'
                    .'|wdt/([^/]++)(*:169)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:215)'
                            .'|router(*:229)'
                            .'|exception(?'
                                .'|(*:249)'
                                .'|\\.css(*:262)'
                            .')'
                        .')'
                        .'|(*:272)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'contact', 'id' => '1', '_controller' => 'App\\Controller\\PageController::findUserById'], ['id'], null, null, false, true, null]],
        55 => [[['_route' => 'search', '_controller' => 'App\\Controller\\PageController::searchUsers'], ['text'], null, null, false, true, null]],
        86 => [[['_route' => 'update_user_name', '_controller' => 'App\\Controller\\PageController::updateUserName'], ['id', 'name'], null, null, false, true, null]],
        108 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\PageController::deleteUser'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        169 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        229 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        249 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        262 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        272 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
