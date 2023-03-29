<!DOCTYPE html>
<html>
<head>

    <title>My Webpage</title>
    <style>
        
        .my-table {
    border-collapse: collapse;
    width: 100%;
}

.my-table th, .my-table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.my-table th {
    background-color: #f2f2f2;
    color: #333;

}
.topleft {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 18px;
}


input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

    </style>
</head>
<body>

    <!-- Displaying  the database contents here using PHP -->
    
    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "droame";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the database
$sql = "SELECT * FROM booking";
$result = mysqli_query($conn, $sql);


// Display the data in an HTML table
if (mysqli_num_rows($result) > 0) {
    echo "<table class='my-table'>";
    echo "<tr><th>ClientID</th><th>Name</th><th>Email</th><th>Phoneno</th><th>Location</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>"  . $row["location"] ."</td><td>"  . $row["date"] . "</td></tr>";
    }
    echo "</table >";
} else {
    echo "No results found.";
}

// Close the database connection
mysqli_close($conn);
?>


<form action="up-data.html" method="POST">
    
    <center><input type="submit" name="Update"></center>
</form>

 
<form action="delete.php" method="POST">
    
    <center><input type="submit" name="Update"></center>
</form>
</body>
</html>
