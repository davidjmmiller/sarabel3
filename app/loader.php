<?php

// Paths
define('PATH_APP','../app/');
define('PATH_CONTROLLERS',PATH_APP.'controllers/');
define('PATH_VIEWS',PATH_APP.'views/');
define('PATH_MODELS',PATH_APP.'models/');
define('PATH_LIBS',PATH_APP.'libs/');
define('PATH_CONFIG',PATH_APP.'config/');

// Loading config
require PATH_CONFIG.'general.php';
require PATH_CONFIG.'routes.php';
require PATH_CONFIG.'database.php';

if (isset($_GET['q'])) {
    if (isset($g_routes[$_GET['q']])) {
        $g_controller = $_GET['q'];
    } else {
        $g_controller = 'page_not_found';
    }
}
else {
    $g_controller = 'welcome';
}


// Loading controller
require PATH_CONTROLLERS.$g_controller.'.php';
