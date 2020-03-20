<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>

<body>

<?php
require_once ('Person.php');

$ranObj = new User ( 'Ranjith', '31' );
echo "<br> Name is: " . $ranObj->getName ();
echo "<br> Age is: " . $ranObj->getAge ();
$ranObj->setAddress ( 'MGR Nagar' );
echo "<br> Address is: " . $ranObj->getAddress () . "<br>";

echo "<br><b>Using var_dump</b>";
var_dump ( $ranObj );
echo "<br>";

echo "<b>Using print_r</b><br>";
print_r ( $ranObj );
echo "<br>";

$ranObj = new User ( 'Sekar', '60', 'Melsev' );
echo "<br> Name is: " . $ranObj->getName ();
echo "<br> Age is: " . $ranObj->getAge ();
echo "<br> Address is: " . $ranObj->getAddress ();

?>
</body>

</html>