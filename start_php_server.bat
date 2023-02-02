echo off
set port="8000"
set url="http://localhost:%port%/"
start chrome --incognito %url%
php -S localhost:%port%