<!DOCTYPE html>
<html>
<head>
    <title>Office Hours by Xiaoyu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .hours-container {
            max-width: 400px;
            margin: 0 auto;
        }
        .day {
            display: flex;
            justify-content: space-between;
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }
        .day-name {
            font-weight: bold;
            width: 120px;
        }
        .hours {
            text-align: right;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Business Office Hours</h1>
    
    <?php
    // Create associative array with office hours
    $officeHours = array(
        'Monday' => '9am - 5pm',
        'Tuesday' => '9am - 5pm', 
        'Wednesday' => '9am - 5pm',
        'Thursday' => '9am - 5pm',
        'Friday' => '10am - 3pm',
        'Saturday' => '10am - 2pm',
        'Sunday' => 'Closed'
    );
    
    // Function to display office hours
    function displayHours($hours) {
        $output = '<div class="hours-container">';
        
        // Loop through the associative array
        foreach ($hours as $day => $time) {
            $output .= '<div class="day">';
            $output .= '<span class="day-name">' . $day . '</span>';
            $output .= '<span class="hours">' . $time . '</span>';
            $output .= '</div>';
        }
        
        $output .= '</div>';
        return $output;
    }
    
    // Call the function and display the hours
    echo displayHours($officeHours);
    ?>
    
</body>
</html>