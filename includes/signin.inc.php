<?php 
include "./classes/register.class.php";

$userLogin = new Login();

if(isset($_POST['submit'])){
 $result = $userLogin->loginFirst( $username = $_POST['username'], $password = $_POST['password']);
 
 if(empty($username) || empty($password)){
  return $message = "Please enter your username";
 }else{
       if($result == 1){
          header("Location: ./index.php");
         }elseif ($result == 10) {
             return $message = "Username and password not match";
         }else{
             return $message = "Invalid";
         }
 }


}




?>