<?php

require('./vendor/autoload.php');

require('./configs/config.php');

$route = require('utils/router.php');

$controllerName = 'Controllers\\'.$route['controller']; // = \Controllers\Candidate par ex

$controller = new $controllerName;
//var_dump($controller);

$data = call_user_func([$controller ,$route['callback']]);

extract($data, EXTR_OVERWRITE);

//require ('./views/election.php');
require($view);


