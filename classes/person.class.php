<?php 
class Person{
 private $name;
 private $skinColor;
 private $age;


 public function __construct($name, $skinColor, $age){
  $this->name = $name;
  $this->skinColor = $skinColor;
  $this->age = $age;
 }

 public function getName(){
  return $this->name;
 }
}


?>