<?php 
include "./classes/payment.class.php";

$emptyError = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $paymentTye = $_POST['paymenType'];
 if(empty($paymentTye)){
  $emptyError = true;
  echo $validation = "Please enter a payment type";
 }
 elseif ($paymentTye = "Paypal") {
  header("Location:  paypal-process.php");
 }elseif ($paymentTye = "Gcash") {
   header("Location:  gcash-process.php");
 }elseif ($paymentTye = "Visa") {
   header("Location:  visa-process.php");
 }else{
   echo $validation = "Invalid payment type";
 }
}



?>