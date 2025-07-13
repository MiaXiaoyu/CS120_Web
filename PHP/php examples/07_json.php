<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JSON and PHP</title>
</head>

<body>
	<?php
	$s = '{"name":"pete","age":"22"}';	//string that looks like a JSON
	$arr = json_decode($s, true);		//now its an array
	echo "age: " . $arr['age']. "<br/>";
	
	$stuff = array('fname'=>'Sue', 'lname'=>'Jones');
	$sJSON = json_encode($stuff);		//array to JSON string
	$arr = json_decode($sJSON, true);	//JSON string to array

	echo "first name:". $arr['fname'];

	?>
</body>
</html>