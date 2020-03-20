<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>

<body>

<?php
$DEBUG = 1;

function sampleFunction()
{
    if ($GLOBALS['DEBUG']) {
        echo "sampleFunction called </br>";
    }

    $internalVariable = 20;
    echo "Internal Variable value is: $internalVariable";
}

sampleFunction();
echo "<br><br>";
SAMPLEFunction();
?>
</body>

</html>