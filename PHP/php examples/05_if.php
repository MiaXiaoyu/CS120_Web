<!doctype html>
<html>
<head>
<title>conditionals syntax</title>
</head>

<body>
   
<?php
    $x = 17;
    if ($x > 10)
	    echo "It's greater than 10. <br />";
    
    if ($x > 10)
    {
	    echo "It's greater than 10. ";
        echo "<br />";
    }

    if ($x > 10):
        echo "It's greater than 10. <br />";
    endif;
?>

	
</body>
</html>