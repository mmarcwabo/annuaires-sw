<?php

//Loading configurations files
require "config.php";

//autoloader
spl_autoload_register(function($class){

    require LIBS . $class . ".php";
});

$app = new Bootstrap();
//Options
//$app->setControllerPath("/controllers");
//$app->setModelPath("/models");
$app->init();


