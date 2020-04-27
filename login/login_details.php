<?php

  session_start();
  //including for calling useful functions 
  include '../libraries/chocolates.php';

  $user_name = $_POST['user_name'];
$password = $_POST['password'];

function check_password($user_name,$password)
{
    
  $con = getCon();
    
  $user = $con->query("select * from user where user_name='$user_name';")->fetch_assoc();
  echo var_dump($user);
  $password_hash=$user['password'];
    
  if(password_verify($password,$password_hash))
    return True;
  else
    return False;
}


if(rowExists('user','user_name',$user_name)){
    if(check_password($user_name,$password)){
        $_SESSION['user_name']=$user_name;
        header("Location:../index.php");
        die();
    }
    else
        echo "no2 [password wrong]";
}
else
    echo "no1 [user doesn't exist]";
  

?>
