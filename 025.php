<?php /* Logical Operators */
// &&  : all of them are True
// and : all of them are True
// ||  : one of them are True
// or  : one of them are True
// xor : atleast one of them are True

$one = 1;
if ($one == 2 ! $one == 5 ! $one == 1){
  echo "YES"; // here we have one True condition and that is enough
}
