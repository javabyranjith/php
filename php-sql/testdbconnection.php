<?php 
$dbhost = 'localhost';
$dbuser = 'one';
$dbpass = 'two';
$database = 'ranjith';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$database);

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connected Successfully";
}

?>
