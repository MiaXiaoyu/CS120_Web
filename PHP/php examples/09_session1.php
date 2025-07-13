<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>session 1</title>
</head>

<body>
<?php
	$_SESSION['save'] = "hello";
?>
	<br /><br />
	<a href='session2.php'>Go to page 2</a>
	
</body>
</html>