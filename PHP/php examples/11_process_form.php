<!doctype html>
<html>
<head>
<title>form demo</title>
</head>
<body>
<?php
extract ($_POST);
echo $animal_name . "<br>";

foreach ($_POST as $f => $v)
    echo "$f has a value of $v<br>";
?>

</body>
</html>