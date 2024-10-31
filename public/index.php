<?php 
use Router\Router;

// RewriteRule ^(.*)$ public/index.php?url=$1[QSA,L]
require '../vendor/autoload.php';
define("VIEWS",dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPT', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router('url');
$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/post/:id', 'App\Controllers\BlogController@show');
$router->run();