!<?php 
class House{
 private $subdivation;
 private $houseLot;
 private $houseNumber;


public function __construct($subdivation, $houseLot, $houseNumber)
{
$this->subdivation = $subdivation;
$this->houseLot = $houseLot;
$this->houseNumber = $houseNumber;
}
public function getSubdivation(){
 return $this->subdivation;
}
}



?>