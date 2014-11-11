<?php

require 'vendor/autoload.php';

$router = new \Neuron\Router ();

$router->get ('/login/*', '\CatLab\SignIn\FrontController');

$router->get ('/', function () {
    return \Neuron\Net\Response::json (array ('No data'));
});

$router->run ();