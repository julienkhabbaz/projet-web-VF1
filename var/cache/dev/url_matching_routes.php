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
        '/admin/dash' => [[['_route' => 'admin_dash', '_controller' => 'App\\Controller\\Admin\\AdminDashController::index'], null, null, null, false, false, null]],
        '/admin/plat' => [[['_route' => 'plat_index', '_controller' => 'App\\Controller\\Admin\\AdminPlatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/plat/new' => [[['_route' => 'plat_new', '_controller' => 'App\\Controller\\Admin\\AdminPlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/restaurant' => [[['_route' => 'restaurant_index', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/restaurant/new' => [[['_route' => 'restaurant_new', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace_client' => [[['_route' => 'espace_client', '_controller' => 'App\\Controller\\Client\\EspaceCLientController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/restaurants' => [[['_route' => 'liste_restaurants', '_controller' => 'App\\Controller\\FrontController::ListRestaurant'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'type_register', '_controller' => 'App\\Controller\\RegistrationController::type'], null, null, null, false, false, null]],
        '/register_client' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register_restaurant' => [[['_route' => 'restaurant_register', '_controller' => 'App\\Controller\\RegistrationController::registerRestaurant'], null, null, null, false, false, null]],
        '/espace_restaurant/dash' => [[['_route' => 'espace_restaurant', '_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::index'], null, null, null, false, false, null]],
        '/espace_restaurant/restaurants' => [[['_route' => 'mes_restaurants', '_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::listeRestaurants'], null, ['GET' => 0], null, false, false, null]],
        '/espace_restaurant/plats' => [[['_route' => 'mes_plats_restaurants', '_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::listePlats'], null, ['GET' => 0], null, false, false, null]],
        '/espace_restaurant/restaurant_new' => [[['_route' => 'restaurants_new', '_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::newRestaurant'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace_restaurant/plat_new' => [[['_route' => 'plats_new', '_controller' => 'App\\Controller\\Restaurant\\EspaceRestaurantController::newPLat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout'], null, null, null, false, false, null],
        ],
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
                .'|/admin/(?'
                    .'|plat/([^/]++)(?'
                        .'|(*:195)'
                        .'|/edit(*:208)'
                        .'|(*:216)'
                    .')'
                    .'|restaurant/([^/]++)(?'
                        .'|(*:247)'
                        .'|/edit(*:260)'
                        .'|(*:268)'
                    .')'
                .')'
                .'|/restaurant/([^/]++)(*:298)'
                .'|/commande/([^/]++)(*:324)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:386)'
                    .'|([A-z0-9_-]*)/(.+)(*:412)'
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
        195 => [[['_route' => 'plat_show', '_controller' => 'App\\Controller\\Admin\\AdminPlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'plat_edit', '_controller' => 'App\\Controller\\Admin\\AdminPlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'plat_delete', '_controller' => 'App\\Controller\\Admin\\AdminPlatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        247 => [[['_route' => 'restaurant_show', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'restaurant_edit', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        268 => [[['_route' => 'restaurant_delete', '_controller' => 'App\\Controller\\Admin\\AdminRestaurantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        298 => [[['_route' => 'detail_restaurant', '_controller' => 'App\\Controller\\FrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        324 => [[['_route' => 'commander', '_controller' => 'App\\Controller\\FrontController::Commander'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        386 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        412 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
