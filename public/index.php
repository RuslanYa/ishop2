<?php

//var_dump( dirname(__DIR__) );
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';


new \ishop\App();

//var_dump( \ishop\Router::getRoutes());

//throw new Exception('Страница не найдена', 500);