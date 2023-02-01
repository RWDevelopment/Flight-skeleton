<?php

use flight\Engine;
$app = new Engine();

// autoload controllers ////////
$app->path('controller');

// view controllers for register ////////
$controllers = [
    'display' => 'ViewController'
];

// register view controllers ////////
foreach($controllers as $controller_name => $controller) {
    $app->register($controller_name, $controller);
}

// global vars for views ////////
$app->view()->set(
	
    [
        'language' => '',
	'theme' => 'auto',
        'favicon' => '',
        'site_description' => '',
        'robots' => '',
        'site_title' => 'My Website'
    ]
	
);

// before start ////////
$app->before('start', function(){
    
});
