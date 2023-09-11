<?php
/*
Assign variable
  var always assigned by value
*/
// e.g
$a = 1
$b = $a
  // in this case $b = 1

  /*
  Assign by references
    assign by refere make var alias or point to another
  */
  // e.g
  $H1 = "Root";
  $H2 = &$H1;
  // H2 here is "Root"
  $H2 = "Kali"; // now H2 is "Kali"
  // we can make H1 refere to H2 with & sign
  /* $H2 = &$H1; */
  // so when we add this to $H1 => &H1
  echo "$H1";
  echo "$H2";
  /* both of them give us the same result "Kali"
/* this is like $var_one = $var_two and php get the last value and make it a value of both vars 
