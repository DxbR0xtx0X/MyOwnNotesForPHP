<?php /* array Operators */
/*
+   => to union two or three arrays in once
==  => Equal => same key and value sequance doesn't matter
<>  => Not Equal
!=  => Not Equal
=== => Identical same key and value and same order
!== => Not Identical
*/

<?php
$arr = [1,2,2,2,2,2];
$arr2 = [1,2,2,2,2,21,2,2,2,2,2];

echo "<pre>";
print_r($arr + /* + here to union the two arrays */$arr2);
echo "</pre>";


$arr3 = [1 => 10 , 2 => 20];
$arr4 = [2 => "20" , 1 => "10"];
// $arr3 and $arr4 are the same bcs they have the same key and value
var_dump($arr3 == $arr4); // here we get true



//here we have the same key and same value and the same order
$arr5 = [2 => "20" , 1 => "10" ];
$arr6 = [2 => "20" , 1 => "10"];
var_dump($arr5 === $arr6); // here we get true

/*
=====================================================================
======== we don't have to say anything about not equal ==============
=====================================================================
*/ 
