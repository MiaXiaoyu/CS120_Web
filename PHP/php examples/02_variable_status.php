<!doctype html>
<html>
<head>
<title>variable status</title>
</head>

<body>
   
<?php
   echo (isset($x))? "x is set" : "x is not set";
   echo "<br />";
   echo (empty($x))? "x is empty" : "x is not empty";
   echo "<hr />";

   $x = 17;
   echo (isset($x))? "x is set" : "x is not set" ;
   echo "<br />";
   echo (empty($x))? "x is empty" : "x is not empty";
   echo "<hr />";

   $x="";
   echo (isset($x))? "x is set" : "x is not set" ;
   echo "<br />";
   echo (empty($x))? "x is empty" : "x is not empty";
   echo "<hr />";

   $x =0;
   echo (isset($x))? "x is set" : "x is not set" ;
   echo "<br />";
   echo (empty($x))? "x is empty" : "x is not empty";
   echo "<hr />";
   
   unset($x);
   echo (isset($x))? "x is set" : "x is not set" ;
   echo "<br />";
   echo (empty($x))? "x is empty" : "x is not empty"; 
   echo "<br />";
?>

	
</body>
</html>