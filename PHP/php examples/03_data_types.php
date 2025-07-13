<!doctype html>
<html>
<head>
<title>variable status</title>
</head>

<body>
   
<?php
$x= 1;
echo "original: " . gettype($x) . "<br />";
$x .= "";
echo "concat with string: " . gettype($x) . "<br />";
echo "cast to float: " . gettype((float)$x) . "<br />";
echo "not cast: " .gettype($x) . "<br />";
  
?>

	
</body>
</html>