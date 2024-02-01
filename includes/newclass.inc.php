<?php

// class Human {
//  public $info = "This is information about";

// }

// $object = new Human();
// var_dump($object);

// class Animal{
//  public $name = "Carry";
// }
// $dog = new Animal();

// class Person{
//  protected $firstName = "John";
//  protected $lastName = "Doe";
//  public $age = 30;
 
// }
// //inheretances
// class Pet extends Person{
//  public function owner(){
//   $dog = $this->lastName;
//   return $dog;
//  }
// }

// class Pet2 extends Pet{
//  public function secondOwner(){
//   $cat = $this->firstName;
//   return $cat;
//  }

// }

class Person{
 private $firstName;
 private $lastName;
 private $age;

 public function __construct($firstName, $lastName, $age){
  $this->firstName = $firstName;
  $this->lastName = $lastName;
  $this->age = $age;
 }
 public function setName($firstName){
  $this->firstName = $firstName;
 }
 public function getName(){
  return $this->firstName;
 }
}
?>