<?php

  session_start();
  //including for calling useful functions 
  include '../libraries/chocolates.php';

  //getting username and password from login.php
  $u = $_POST['user_name'];
  $p = $_POST['password'];

  function check_password($user_name,$password)
  {
    
    $con = getCon();
    
    $user = $con->query("select * from user where user_name='$user_name;");
    $res = $user->fetch_assoc();
    echo var_dump($res)."<br>";
    
    $password_hash=$res['password'];
    
    if(password_verify($p,$password_hash))
      return True;
    else
      return False;
    
  }

  //first parameter - user is table,
  //second parameter - column name in table,
  //third parameter - variable created by getting user_name
  if(rowExists('user','user_name',$u)){
    if(check_password($u,$p)){
        $_SESSION['user_name']=$u;
        header("Location:../index.php");
        die();
    }
    else
        echo "no2 [password wrong]";
  }
  else
    echo "no1 [user doesn't exist]";

  
  
  

?>
