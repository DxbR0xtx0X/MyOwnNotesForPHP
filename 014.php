<?php /* testing vars in real life */
$username = "debian"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welcome <?php echo $username?></title>
  </head>
  <body>
    <p> hello and welcome back Mr <?php echo "$username"; ?> </p>

  </body>
</html>
<?php
// also we can call a var from another page from our php server e.gf
include(file_name.php) /* we don't forget paths */ include(path/file_name.php)
