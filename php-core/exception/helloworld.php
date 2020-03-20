<?php 
function checkNum($num){
	if($num > 5){
		throw new Exception('value must be below 5.');
	}
return true;
}

try{
	checkNum(14);
}catch(Exception $ex){
	echo $ex->getMessage();
}
?>
