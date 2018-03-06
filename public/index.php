<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once '../config.php';

$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);

var_dump($baseDir);
$route = $_GET['route'] ?? '/';

function render($fileName, $params = []){
  ob_start();
  extract($params);
  include $fileName;
  return ob_get_clean();
}
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();
$router->get('admin', function(){
    //si no paso nada enel segundo parametro se usa el parametro default que es el que aparece enla funcion render
    return render('../views/admin/index.php');
});

$router->get('/',function() use ($pdo){
  $query = $pdo -> prepare('SELECT * FROM blog_posts ORDER BY id DESC');
  $query -> execute();

  $blogPosts = $query -> fetchAll(PDO::FETCH_ASSOC);
  return render('',['blog']);
  include '../views/index.php';
  return 'Route /';
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);


echo $response;
