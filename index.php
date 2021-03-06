<?php
require 'flight/Flight.php';
define('ROOT', __DIR__ .'/');

Flight::view()->set('sitename', 'Flight-skeleton');


Flight::route('/', function(){
    Flight::render('main');
});

Flight::map('notFound', function(){
    Flight::render('404');
});

Flight::map('error', function(){
    Flight::render('500');
});

Flight::start();
?>
