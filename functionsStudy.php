<?php

//Syntax for creating a function
function newFunc($param, $paramTwo) {
  echo $param\n;
  echo $paramTwo;
}

//Calling a function
newFunc('I am the first parameter', 'And I am the second');

//We can give variables default values by adding in an '=' and then the default value
function anotherFunc($paramOne = 'First Default', $anotherParam = 'Second Default') {
  echo $paramOne \n;
  echo $anotherParam;
}

anotherFunc();

//Can also pass functions into variables

$someVariableName = "anotherFunc";
//Then call the function as per usual
$someVariableName();

//We can make inner variables globally scoped by using the reserved key word 'global'

$variableToOverRide = 'I am the original value';

function thirdFunction() {
  global $variableToOverRide;
  $variableToOverRide = 'I am the second value';
}

thirdFunction();

echo $variableToOverRide;

?>