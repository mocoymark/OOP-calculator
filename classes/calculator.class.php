<?php 
class Calcu{
 private $operator;
 private $num1;
 private $num2;

 public function __construct($operator,$num1,$num2 ){
  $this->operator = $operator;
  $this->num1 = $num1;
  $this->num2 = $num2;
 }

 public function calcu(){
  switch($this->operator){
   case 'add':
    $result =  $this->num1 + $this->num2;
    return $result;
   case 'sub':
    $result =  $this->num1 - $this->num2;
    return $result;
   case 'mul':
    $result =  $this->num1 * $this->num2;
    return $result;
   case 'div':
   $result =  $this->num1 / $this->num2;
    return $result;
   default:
   $result = "Error: Invalid operator";
   return $result;
  }
 }
}



?>