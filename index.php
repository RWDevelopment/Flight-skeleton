<?php
require 'flight/Flight.php';

Flight::route('/', function(){
    Flight::render('main');
});

Flight::map('notFound', function(){
    Flight::render('404');
});

Flight::start();
?>
