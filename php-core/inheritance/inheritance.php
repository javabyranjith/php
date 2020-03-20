<?php
include_once('Father.php');
include_once('Son.php');

echo "<br><b>===Father Details===</b>";
$father = new Father('Ranjith','31','MGR Nagar');
echo "<br>Father Name: ".$father->getName();
echo "<br>Father Age: ".$father->getAge();
echo "<br>Father Address: ".$father->getAddress();


echo "<br><br><b>===Son Details===</b>";
$son = new Son('Kabilan','1');
echo "<br>Son Name: ".$son->getName();
echo "<br>Son Age: ".$son->getAge();
echo "<br>Son Address: ".$son->getAddress();

?>