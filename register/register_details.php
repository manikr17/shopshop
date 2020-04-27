<?php

  include '../libraries/chocolates.php';

  $con=getCon();

  $u = $_POST['user_name'];
  $e = $_POST['email'];
  $p = $_POST['password'];
  $p = password_hash($p,PASSWORD_DEFAULT);

  if(($con->query("insert into user(user_name,email,password) values('$u','$e','$p');"))===True)
    echo "YES";
  else
    echo $con->error;

?>
