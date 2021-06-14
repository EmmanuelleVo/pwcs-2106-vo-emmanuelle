<?php

//require('./vendor/autoload.php');

require('./configs/config.php');

$route = require('utils/router.php');

$controllerName = 'Controllers\\'.$route['controller']; // = \Controllers\Candidate par ex

var_dump($view);
//$controller = new $controllerName;

//$data = call_user_func([$controller ,$route['callback']]);


//require ('./views/election.php');
require($view);


