<?php

use flight\Engine;
$app = new Engine();

// autoload controllers ////////
$app->path('controllers');

// controllers for register ////
$controllers = [
    'display' => 'ViewController'
];

// register controllers ////////
foreach($controllers as $controller_name => $controller) {
    $app->register($controller_name, $controller);
}
