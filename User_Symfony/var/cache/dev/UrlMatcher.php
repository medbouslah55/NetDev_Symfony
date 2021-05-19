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
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/new' => [[['_route' => 'admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend' => [[['_route' => 'backend', '_controller' => 'App\\Controller\\BackendController::index'], null, null, null, false, false, null]],
        '/coach/pdf' => [[['_route' => 'PDF', '_controller' => 'App\\Controller\\CoachController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/coach/TrierParNomDESC' => [[['_route' => 'TrierParNomDESC', '_controller' => 'App\\Controller\\CoachController::TrierParNom'], null, null, null, false, false, null]],
        '/coach/TrierParNomASC' => [[['_route' => 'TrierParNomASC', '_controller' => 'App\\Controller\\CoachController::TrierParNom2'], null, null, null, false, false, null]],
        '/coach' => [[['_route' => 'coach_index', '_controller' => 'App\\Controller\\CoachController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coach/new' => [[['_route' => 'coach_new', '_controller' => 'App\\Controller\\CoachController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, true, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, true, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/membre/api' => [[['_route' => 'membre_api', '_controller' => 'App\\Controller\\MembreApiController::index'], null, null, null, false, false, null]],
        '/membre/AfficherUsers' => [[['_route' => 'AfficherUsersMobile', '_controller' => 'App\\Controller\\MembreApiController::AfficherUsersMobile'], null, null, null, false, false, null]],
        '/membre/signup' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\MembreApiController::signupAction'], null, null, null, false, false, null]],
        '/membre/signin' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\MembreApiController::signinAction'], null, null, null, false, false, null]],
        '/membre/getPasswordByEmail' => [[['_route' => 'app_password', '_controller' => 'App\\Controller\\MembreApiController::getPassswordByEmail'], null, null, null, false, false, null]],
        '/membre/loginadmin' => [[['_route' => 'loginadmin', '_controller' => 'App\\Controller\\MembreController::Loginadmin'], null, null, null, false, false, null]],
        '/membre' => [[['_route' => 'membre_index', '_controller' => 'App\\Controller\\MembreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/membre/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\MembreController::Login'], null, null, null, false, false, null]],
        '/membre/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\MembreController::logout'], null, null, null, false, false, null]],
        '/membre/editpassword' => [[['_route' => 'usereditpassword', '_controller' => 'App\\Controller\\MembreController::editpassword'], null, null, null, false, false, null]],
        '/membre/password_backup/key' => [[['_route' => 'user_password_backup_key', '_controller' => 'App\\Controller\\MembreController::passwordbackupkey'], null, null, null, false, false, null]],
        '/membre/password_backup' => [[['_route' => 'user_password_backup', '_controller' => 'App\\Controller\\MembreController::passwordbackup'], null, null, null, false, false, null]],
        '/membre/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\MembreController::search'], null, null, null, false, false, null]],
        '/membre/new' => [[['_route' => 'membre_new', '_controller' => 'App\\Controller\\MembreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/membre/test/chart' => [[['_route' => 'testChart', '_controller' => 'App\\Controller\\MembreController::pichart'], null, null, null, false, false, null]],
        '/mobile/membre' => [[['_route' => 'mobile_membre', '_controller' => 'App\\Controller\\MobileMembreController::index'], null, null, null, false, false, null]],
        '/mobile/membre_add' => [[['_route' => 'mobile_membre_add', '_controller' => 'App\\Controller\\MobileMembreController::addmembre'], null, null, null, false, false, null]],
        '/mobile/login' => [[['_route' => 'mobile_membre_login', '_controller' => 'App\\Controller\\MobileMembreController::Mobilelogin'], null, null, null, false, false, null]],
        '/tracking' => [[['_route' => 'tracking_index', '_controller' => 'App\\Controller\\TrackingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tracking/new' => [[['_route' => 'tracking_new', '_controller' => 'App\\Controller\\TrackingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/2fa' => [[['_route' => '2fa_login', '_controller' => 'scheb_two_factor.form_controller:form'], null, null, null, false, false, null]],
        '/2fa_check' => [[['_route' => '2fa_login_check'], null, null, null, false, false, null]],
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
                .'|/admin/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/coach/([^/]++)(?'
                    .'|(*:235)'
                    .'|/edit(*:248)'
                    .'|(*:256)'
                .')'
                .'|/m(?'
                    .'|embre/(?'
                        .'|UpdateUserMobile/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:358)'
                        .'|([^/]++)(?'
                            .'|(*:377)'
                            .'|/edit(*:390)'
                            .'|(*:398)'
                        .')'
                    .')'
                    .'|obile/membre_edit/([^/]++)(*:434)'
                .')'
                .'|/tracking/([^/]++)(?'
                    .'|(*:464)'
                    .'|/edit(*:477)'
                    .'|(*:485)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['cin'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['cin'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['cin'], ['POST' => 0], null, false, true, null]],
        235 => [[['_route' => 'coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['cin'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['cin'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['cin'], ['POST' => 0], null, false, true, null]],
        358 => [[['_route' => 'UpdateUserMobile', '_controller' => 'App\\Controller\\MembreApiController::UpdateUserMobile'], ['cin', 'nom', 'prenom', 'taille', 'poids', 'email', 'telephone'], null, null, false, true, null]],
        377 => [[['_route' => 'membre_show', '_controller' => 'App\\Controller\\MembreController::show'], ['cin'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'membre_edit', '_controller' => 'App\\Controller\\MembreController::edit'], ['cin'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [[['_route' => 'membre_delete', '_controller' => 'App\\Controller\\MembreController::delete'], ['cin'], ['POST' => 0], null, false, true, null]],
        434 => [[['_route' => 'mobile_membre_edit', '_controller' => 'App\\Controller\\MobileMembreController::membreedit'], ['cin'], null, null, false, true, null]],
        464 => [[['_route' => 'tracking_show', '_controller' => 'App\\Controller\\TrackingController::show'], ['idTrack'], ['GET' => 0], null, false, true, null]],
        477 => [[['_route' => 'tracking_edit', '_controller' => 'App\\Controller\\TrackingController::edit'], ['idTrack'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        485 => [
            [['_route' => 'tracking_delete', '_controller' => 'App\\Controller\\TrackingController::delete'], ['idTrack'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
