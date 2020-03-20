<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>

<body>

<?php
echo "Foreach Exmaple </br></br>";
echo "=========Sample String Array============ </br></br>";
$strArray = array ("Ranjith","Sekar","Venkat","Kumaran"
);

foreach ( $strArray as $ele ) {
  echo "$ele </br>";
}

echo "</br>=========Sample Integer Array============ </br></br>";
$intArray = array (4,5,3,2,6,8
);
foreach ( $intArray as $ele ) {
  echo "$ele </br>";
}

?>
</body>

</html>