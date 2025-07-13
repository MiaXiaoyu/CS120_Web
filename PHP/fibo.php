<?php
// Read the value of 'n' from the query string
$n = $_GET['n'];

// Generate Fibonacci sequence
$fibSequence = array();

if ($n >= 1) {
    $fibSequence[0] = 0;  // First Fibonacci number
}
if ($n >= 2) {
    $fibSequence[1] = 1;  // Second Fibonacci number
}

// Generate the rest of the sequence
for ($i = 2; $i < $n; $i++) {
    $fibSequence[$i] = $fibSequence[$i-1] + $fibSequence[$i-2];
}

// Create response array (associative array)
$response = array(
    'length' => $n,
    'fibSequence' => $fibSequence
);

// Output JSON response
echo json_encode($response);
?>