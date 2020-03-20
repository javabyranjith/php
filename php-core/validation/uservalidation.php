<!--Exercise Seven Solution-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercise Seven Solution</title>
</head>
<body>

	<?php
		require_once ("ExerciseSevenFunction.php");
		
		if (ValidateUser("virtusa","123"))
		{
			echo "Welcome<br>";
		}
		else
		{
			echo "Please try again.<br>";
		}
	?>
</body>
</html>