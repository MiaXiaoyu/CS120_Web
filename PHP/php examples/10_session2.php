<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Session 2</title>
</head>

<body>
<?php
    if (isset($_SESSION['save']))
		echo "Here is is: ". $_SESSION['save'];
	else 
		echo "No active session";
?>
<br /><br />
<a href='session1.php'>Go to page 1</a>
	
</body>
</html>