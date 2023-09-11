<?php /* (.) (.=) */
$name = "John";
$age = 35;
define("AGE_LIMIT", 18);

echo "My name is " . $name . ", I am " . $age . " years old, and the age limit is " . AGE_LIMIT . ".";
echo "<hr>";




echo $name . AGE_LIMIT; // Best Practice and the easy way

echo "<hr>";
$xay = "Hello ";
$xay .= "World! ";
$xay .= "I love php";
echo $xay;
