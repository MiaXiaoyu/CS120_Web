<!DOCTYPE html>
<html>
<head>
    <title>Select Music Genres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h1 {
            text-align: center;
        }
        .checkbox-item {
            margin: 10px 0;
        }
        .submit-btn {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Select Music Genres</h1>
        
        <form action="db2.php" method="post">
            <div>
                <?php
                // Database connection variables
                $server = 'localhost';
                $userid = 'uctzjpj7p9fbl';
                $pw = '120webclass';
                $db = 'dbo0znjggquaen';
                
                // Create connection
                $conn = new mysqli($server, $userid, $pw, $db);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM genres";
                $result = $conn->query($sql);
                
                // Display checkboxes for each genre
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="checkbox-item">';
                        echo '<input type="checkbox" name="genres[]" value="' . $row["genre_id"] . '" id="genre' . $row["genre_id"] . '">';
                        echo '<label for="genre' . $row["genre_id"] . '">' . $row["genre_name"] . '</label>';
                        echo '</div>';
                    }
                } else {
                    echo "No genres found";
                }
                
                $conn->close();
                ?>
            </div>
            
            <input type="submit" value="Find Songs" class="submit-btn">
        </form>
    </div>
</body>
</html>