<?php
$math = 2 + 4 * 5; // here we do multiplicatoin first than addion
$math2 = 10 || false; // the same thing here we do || first 
/*
|| this has more priority than or
&& ============================ and
*/
echo 10 || false; // || it's a logical operator, and the logical operator give us true or false

$a = 10 || false;



echo $a; // => the result will be 1
    // $a = (10 || false); we get the result and than assign it in variable

$b = 10 or false;
echo $b; // => the result will be 10
    // here with or the assingment get the higher priority
