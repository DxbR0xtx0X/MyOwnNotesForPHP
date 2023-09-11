switch
<?php
// syntax
$day = "Sat";
switch($day) {
  case "Sat":
    echo "";
    // Here i say if the case is equal with my var do ...
    break;
    // break is important here to stop the code
  case "...":
    echo "";
    break;
  case "one";
  case "two";
      // if the case one and the case two have tha same msg we can write them togther to get one msg
      echo "whatever show the same MSG"
  default:
    echo "your msg :)"
    // we use default in case the value not equal with any case from our cases above

}
