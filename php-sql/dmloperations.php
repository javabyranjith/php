<?php 
$dbhost = 'localhost';
$dbuser = 'one';
$dbpass = 'two';
$database = 'ranjith';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$database);

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connected Successfully<br><br>";
}

$query = "select * from employee";
$result = $conn->query($query);

//echo "<br> No of rows: ";

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
	echo "<b>Employee ID: </b>".$row["empid"];
	echo "<br><b>Employee Name: </b>".$row["empname"];
	echo "<br><b>Employee Address: </b>".$row["address"];
	echo "<br><b>Employee Email: </b>".$row["email"];
	echo "<br><br>";
	}
}else{
	echo "No data";
}

?>
