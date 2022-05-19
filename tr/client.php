<?php

spl_autoload_register(function ($class){
   $path =  __DIR__ . '/' . $class . '.php';
   require $path;
});

$result = new Calculator();

//Вывод
//$result->calcTransport($truck);
//$result->calcTransport($seaContainer);
//$result->calcTransport($truckTrailer);
//$result->calcTransport($airplane);

//Вывод
$result->sort();
$result->cheapestOption();
$result->getFormula();




