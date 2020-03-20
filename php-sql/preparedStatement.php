<?php 
$dbhost = 'localhost';
$dbuser = 'one';
$dbpass = 'two';
$database = 'ranjith';

try{
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$database);

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connected Successfully <br><br>";
}

//prepare and bind
$stmt = $conn->prepare("INSERT INTO employee(empid,empname,address,email) values (?,?,?,?)");
$stmt->bind_param('isss',$id,$name,$add,$mail);
//set parameters and execute
$id=200;
$name = "Venkat";
$add = "Chennai";
$mail = "venkat@gmail.com";
$stmt->execute();

//set parameters and execute
/**$id=300;
$name = "Chhanda";
$add = "Chennai";
$mail = "chhanda@gmail.com";
$stmt->execute();*/

}catch(Exception $ex){
	$ex->getMessage();
	echo "Error is: $ex";
}
?>
