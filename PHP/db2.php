<!DOCTYPE html>
<html>
<head>
    <title>Songs by Selected Genres from Xiaoyu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h1 {
            text-align: center;
        }
        .song-item {
            border: 1px solid #ccc;
            margin: 10px 0;
            padding: 15px;
        }
        .song-title {
            font-weight: bold;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Songs in Selected Genres</h1>
        
        <?php
        // Check if genres were selected
        if (isset($_POST['genres']) && !empty($_POST['genres'])) {
            
            // Database connection variables
            $server = 'localhost';
            $userid = 'uctzjpj7p9fbl';
            $pw = '120webclass';
            $db = 'dbo0znjggquaen';
            
            // Create connection
            $conn = new mysqli($server, $userid, $pw);
            
      
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $conn->select_db($db);
            
            // Get selected genre IDs
            $selectedGenres = $_POST['genres'];
            
            $genreList = '';
            for ($i = 0; $i < count($selectedGenres); $i++) {
                if ($i > 0) {
                    $genreList .= ',';
                }
                $genreList .= $selectedGenres[$i];
            }
            
            // Query to get songs that match any of the selected genres
            $sql = "SELECT DISTINCT s.title, s.artist 
                    FROM songs s 
                    INNER JOIN song_genres sg ON s.song_id = sg.song_id 
                    WHERE sg.genre_id IN ($genreList)
                    ORDER BY s.title";
            $result = $conn->query($sql);
            
            // Display results
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="song-item">';
                    echo '<div class="song-title">' . $row["title"] . '</div>';
                    echo '<div class="song-artist">by ' . $row["artist"] . '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="no-results">No songs found for the selected genres.</div>';
            }
            

            $conn->close();
            
        } else {
            echo '<div class="no-results">No genres were selected. Please go back and select at least one genre.</div>';
        }
        ?>
        
        <a href="db1.php" class="back-link">← Back to Genre Selection</a>
    </div>
</body>
</html>