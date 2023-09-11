<?php
// converting any data type to boolean
// also we have a built in function "var_dump()" and this one give us info about the data type we give to the 'var_dump'
/*
  to convert any  data to boolean
  var_dump((boolean) our data_type)
*/
var_dump((boolean) 1.5);
var_dump((boolean) "hello");
var_dump((boolean) 1);
var_dump((boolean) []);
// NOTE NOTE each data has a truthy or falsy value so when we convert any data to boolean we're looking to two types "True or False"
// all of these give us the same result boolean data type and the output
// NOTE ("" = "0" = [] = 0 = array() = False)
