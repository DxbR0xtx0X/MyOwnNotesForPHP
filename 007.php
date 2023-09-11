<?php
// 1) in PHP we don't have to defined the date type bcs the lang is smart enough to know that
// in php 1 + "1" the result is 2
// in other lan the result will be 11
echo gettype(1 + "2"); /* the result here is 3 and the data type is intger */
echo '<br>'
echo gettype(True); /* the result here is boolean*/
echo '<br>'
echo gettype(12); /* the result here is inte */
echo '<br>';
echo gettype(12.5); /* the result here is double or float */
echo "<br>";
echo gettype(1 + "2 this is just to get an e.g"); /* the result here is 3 with warning bcs we have str after integer*/
/* to keep these in your mind you have to practice them over and over*/
// NOTEE the process here :
  // gettype(1 + "2");
  // gettype(3);
  // => result :: integer
  // like an algorithm 1 and 2 then 3
