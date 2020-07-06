<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chambre' => [[['_route' => 'chambre', '_controller' => 'App\\Controller\\ChambreController::index'], null, null, null, false, false, null]],
        '/CreateChambre' => [[['_route' => 'createChambre', '_controller' => 'App\\Controller\\ChambreController::createChambre'], null, null, null, false, false, null]],
        '/AddEtudiant' => [[['_route' => 'AddEtudiant', '_controller' => 'App\\Controller\\ChambreController::AddEtudiant'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ChambreController::home'], null, null, null, false, false, null]],
        '/allocation' => [[['_route' => 'allocation', '_controller' => 'App\\Controller\\ChambreController::allocation'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
