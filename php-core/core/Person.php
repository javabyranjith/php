<?php

class User{
private $name;
private $age;
private $address;

public function __construct($username,$userage,$useraddress = 'Chennai'){
$this->name = $username;
$this->age = $userage;
$this->address = $useraddress;
}

public function __destruct(){
echo "<br> $this->name object is being destroyed </br>";
}

public function getName(){
return $this->name;
}
public function getAge(){
return $this->age;
}
public function getAddress(){
return $this->address;
}

public function setAddress($newAddress){
$this->address = $newAddress;
}

}

?>