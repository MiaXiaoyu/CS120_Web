<!doctype html>
<html>
<head>
<title>arrays</title>
</head>

<body>
   <h3>Arrays</h3>

<?php

$flowers = array('rose', 'tulip', 'daisy');

for ($i=0; $i< count($flowers); $i++)
echo $flowers[$i], '<br />';
echo "<hr />";
foreach ($flowers as $item)
echo $item, '<br />';

echo "<hr /><h3>Associative Arrays</h3>";

$prices = array( 'Widget'=>100, 'Gadget'=>10, 'Things'=>4 );
echo $prices['Gadget'];
$prices['Things'] = 6;
$prices['Junk'] = 20;
echo "<hr />";
foreach ($prices as $item=>$price)
    echo ("$item costs $$price<br />");
echo "<hr />";
$keys = array_keys($prices);
for ($i=0; $i< count($prices); $i++)
{
    $item =  $keys[$i];
    $price = $prices[$item];
    echo ("$item costs $$price<br />");
}
extract($prices);
echo "<hr />";
echo "Widget is: $Widget";
?>

	
</body>
</html>