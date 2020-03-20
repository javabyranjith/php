<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>

<body>
<!--
SUPER GLOBALS ARE:
$_COOKIE
$_SERVER
$_SESSION
-->
<form id="login" action="processLogin.php" method="post" accept-charset="UTF-8">

	<label for="username">Username: </label>
	<input type="text" name="username" id="username" maxlength="50"/></br>
	<label for="username">Password: </label>
	<input type="text" name="password" id="password" maxlength="50"/></br>
	<input type="submit" name="Submit" id="Submit"/>

</form>

<?php
	require_once('processLogin.php');
?>
</body>

</html>