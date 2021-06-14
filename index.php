<?php

//require('./vendor/autoload.php');

require('./configs/config.php');

$route = require('utils/router.php');
var_dump($route);die();

$controllerName = 'Controllers\\'.$route['controller']; // = \Controllers\Candidate par ex

$controller = new $controllerName;

// $data reçoit une fonction dont on ne connait pas le nom à l'avance mais qui va être évaluée en amont
$data = call_user_func([$controller ,$route['callback']]);


//require ('./views/candidate.php');
require($view);


