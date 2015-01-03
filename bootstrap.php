<?php

$route = explode('/', $_SERVER['REQUEST_URI']);
$route = (isset($route[1])) ? $route[1] : 'principal';

$http_host = $_SERVER['HTTP_HOST'];

if (strpos($http_host, 'localhost') !== false) {
    $host = explode('/', $http_host);
    $host = $host[0];
    define('URL', "http://{$host}/");
} else {
    define('URL', 'http://flisolsantos.com.br/');
}
