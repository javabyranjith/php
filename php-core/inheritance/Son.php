<?php
include_once('Father.php');

class Son extends Father{
private $name;
private $age;
private $address;

public function __construct($name,$age){
$this->name = $name;
$this->age = $age;
//$this->address = $address;
//echo "Father Address: ".Father::getAddress();
}

public function getName(){
return $this->name;
}

public function getAge(){
return $this->age;
}

public function getAddress(){
//$father = new Father(null,null,null);
//var_dump($father);
return $this->address = Father::getAddress();
}

}

?>