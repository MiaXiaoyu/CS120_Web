<?php
$n = $_GET['n'];

// Generate Fibonacci sequence
$fibSequence = array();

if ($n >= 1) {
    $fibSequence[0] = 0;  // First 
}
if ($n >= 2) {
    $fibSequence[1] = 1;  // Second 
}

// The rest of the sequence
for ($i = 2; $i < $n; $i++) {
    $fibSequence[$i] = $fibSequence[$i-1] + $fibSequence[$i-2];
}

// Create response array
$response = array(
    'length' => $n,
    'fibSequence' => $fibSequence
);

// Output JSON response
echo json_encode($response);
?>