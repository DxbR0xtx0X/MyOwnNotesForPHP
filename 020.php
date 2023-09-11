<?php
// OPERATORS
  // used to perform operation on value
// Arithmetic Operators
  // used to do Arithmetic operations & conversion
  [+]
  [-]
  [*]
  [/]
  [%]
  [**]
  +$var ==> IDENTITY
  -$var ==> NEGATION

$num = "100";
echo gettype($num); // the result here is 100 and the type is a string
echo "<hr>";
$num2 = +"100";
echo gettype($num2); //the result here is 100 and the type is a integer
// with it we change the data type of our value
echo "<hr>";
echo "<hr>";
$num = "-100";
echo gettype($num); // here we've -100 as a string
echo "<hr>";
$num2 = -"-100"; // // here we've -100 as a string
// but with negation sign it will turned into interger but the result is positive
echo gettype($num2); // here we get 100 as integer
// NOTE IN MATH BASICS WE SAY (-) * (-) = (+)
// I HOPE THIS IS CLEAR 
