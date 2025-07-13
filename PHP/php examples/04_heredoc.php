<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JSON and PHP</title>
</head>

<body>
	<?php
	echo "You can include variable identifiers in a heredoc and they will be evaluated<br>";
    $x = 17;
    $s1= <<<EOT
    The value of
    x is $x!
    EOT;
    echo $s1;
    echo "<br>A heredoc can also be helpful for adding JavaScript<br>";
    $buttonName = "button1";
    echo <<<JS
        <script>
            function buttonHandler() {
                alert('button pressed!');
            }
        </script>
        
        <input type='button' name='$buttonName' onclick='buttonHandler()' value='Press Me'>
        
    JS;

    
	?>
</body>
</html>