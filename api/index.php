<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

/* 
require_once('./Country.php');

$country = new Country(); //Instance

print_r($country->getCountryCode('+85'));
print_r($country->getCountryName('Colombia'));

require_once('./States.php');
$state = new States();
print_r($state->getStates());
print_r($state->getStatesForCountry('+57')); */

require_once('./City.php');
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$city = new City(); // Creando una nueva instancia 
//Convertir un string a un array con un separador
$url = explode("/", $url);
//isset verifica que la variable exista y no sea nula
if(isset($url[1])){
    $action = $url[1];
    //$city->getAllCountry()
    echo json_encode($city->{$action}($url));
}