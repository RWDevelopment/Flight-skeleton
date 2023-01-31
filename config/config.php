<?php

use flight\Engine;
$app = new Engine();

// autoload controllers ////////
$app->path('controllers');

// view controllers for register ////
$controllers = [
    'display' => 'ViewController'
];

// register view controllers ////////
foreach($controllers as $controller_name => $controller) {
    $app->register($controller_name, $controller);
}

// before start ///////////
$app->before('start', function(){
    
});
