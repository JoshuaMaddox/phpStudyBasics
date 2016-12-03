<?php 

//Define a constant by passing in the constant name as the 
//first argument and the value as the second argument
//convention is to Upper_Snake case constant names
define("A_Constant", "The Constant's Value"); 

$iAmAnInt = 768;
$iAmAString = "I am the string's value";
$iAmAFloat = 34.4562;
$iAmABool = true; 

//Will print 1 if true 0 if false to the same line
echo is_int($iAmAnInt);
echo is_string($iAmAString);
echo is_bool($iAmABool);
echo is_float($iAmAFloat);

//Will return 1 if defined and nothing if undefined
echo defined("A_Constant");

?> 