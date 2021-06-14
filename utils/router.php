<?php

$routes = require('configs/routes.php');

$method = $_SERVER['REQUEST_METHOD'];
$methodName = '_'.$method;
$action = $$methodName['action'] ?? '' ; // = $_GET['action'] ou $_POST['action']
$resource = $$methodName['resource'] ?? '';


// chaque route est transmise à une fonction permettant de faire des comparaisons pour savoir laquelle correspond à des critères (comparer ce qui est dans $r method avec le contenu de la variable method
// retourne true si 3 bon critères, on garde l'entrée (la $route) correspondante
$route = array_filter($routes, static function($r) use ($method, $action, $resource) {
    return $r['method'] === $method
        && $r['action'] === $action
        && $r['resource'] === $resource;
});

if(!$route) {
    header('Location: index.php');
    exit();
}

return reset($route);