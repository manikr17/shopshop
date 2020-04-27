<?php

  //including for calling useful functions 
  include '../libraries/chocolates.php';

  //to get connection from db
  $con=getCon();

  //getting username and password from regsiter.php
  $u = $_POST['user_name'];
  $e = $_POST['email'];
  $p = $_POST['password'];
  $p = password_hash($p,PASSWORD_DEFAULT);


  //checking if query is valid if yes then yes else respective error will be displayed
  if(($con->query("insert into user(user_name,email,password) values('$u','$e','$p');"))===True)
    echo "YES";
  else
    echo $con->error;

?>
