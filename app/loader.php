<?php

session_start();

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

// Loading libraries
require PATH_LIBS.'utils.php';
require PATH_LIBS.'database.php';

// Determine current language
if (!isset($_SESSION['lang'])){
    $_SESSION['lang'] = $config['lang'];
}

// User select the current language
if (isset($_GET['lang'])){
    switch($_GET['lang']){
        case 'en':
            $_SESSION['lang'] = 'en';
        break;
        case 'es':
            $_SESSION['lang'] = 'es';
        break;
        default:
            $_SESSION['lang'] = $config['lang'];
    }
}

// Loading routes
$current_path = (isset($_GET['q']) ? $_GET['q'] : '');
if (isset($config['routes'][$current_path])) {
    $g_controller = $config['routes'][$current_path];
} else {
    $g_controller = 'page_not_found';
}


// Loading controller
require PATH_CONTROLLERS.$g_controller.'.php';
