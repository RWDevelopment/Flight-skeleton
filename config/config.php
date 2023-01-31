<?php

use flight\Engine;
$app = new Engine();

// autoload controllers ////////
$app->path('controllers');

// controllers for register ////
$classes = [
    'display' => 'ViewController'
];

// register controllers ////////
foreach($classes as $class_name => $class_controller) {
    $app->register($class_name, $class_controller);
}
