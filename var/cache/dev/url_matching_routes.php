<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/animal/create' => [[['_route' => 'animal_create', '_controller' => 'App\\Controller\\AnimalController::create'], null, null, null, false, false, null]],
        '/inicio' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/redirect' => [[['_route' => 'redirect', '_controller' => 'App\\Controller\\HomeController::redirection'], null, null, null, false, false, null]],
        '/animal/index' => [[['_route' => 'animal_index', '_controller' => 'App\\Controller\\AnimalController::index'], null, null, null, false, false, null]],
        '/animal/save' => [[['_route' => 'animal_save', '_controller' => 'App\\Controller\\AnimalController::save'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/validate/email/([^/]++)(*:193)'
                .'|/animal(?'
                    .'|es(?:/([a-zA-Z]+)(?:/([a-zA-Z]+\\s[a-zA-Z]+)(?:/([a-zA-Z0-9_-]+))?)?)?(*:280)'
                    .'|/(?'
                        .'|([^/]++)(*:300)'
                        .'|update/([^/]++)(*:323)'
                        .'|delete/([^/]++)(*:346)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'validate_email', '_controller' => 'App\\Controller\\AnimalController::validateEmail'], ['email'], null, null, false, true, null]],
        280 => [[['_route' => 'animales', 'name' => 'No Eres', 'apellidos' => 'Nada', 'username' => 'Nada', '_controller' => 'App\\Controller\\HomeController::animales'], ['name', 'apellidos', 'username'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        300 => [[['_route' => 'animal_detail', '_controller' => 'App\\Controller\\AnimalController::animal'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'animal_update', '_controller' => 'App\\Controller\\AnimalController::update'], ['id'], null, null, false, true, null]],
        346 => [
            [['_route' => 'animal_delete', '_controller' => 'App\\Controller\\AnimalController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
