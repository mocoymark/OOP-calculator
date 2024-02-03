<?php 

include './classes/register.class.php';

$register = new Register();

if(isset($_POST['submit'])){
 
$result = $register ->register($name = $_POST['name'], $username = $_POST['username'],$email = $_POST['email'],$password = $_POST['password'],$confirmPassword = $_POST['confirmPassword']);

if(empty($name) ||  empty($email) || empty($password)) {
 return $message = "Please fill out all the fields.";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  return $message = "Invalid email";
}else{
     if($result == 1){
     return $message = "Successfully registered"; 
    }elseif ($result == 10) {
     return $message = " Username already exists! Please try another one.";  
    } else{
     return $message = "Passwords do not match! Try again.";   
    }
  }
}

?>