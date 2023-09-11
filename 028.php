<?php /* Error control Operators */
// @ with it we can hide the error when we get it
// die("") with it we can add readble msg into our code but we can't run the rest of the code 
// we can't coding without errors so we can control them with @ and die("MSG");
$a = 1;
$b = @$a; // we can skip the error with @ sign when we don't have the value of $a
echo $b;
// also we can costom the mgs with die("our msg")
// but the die stoping the script
