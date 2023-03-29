<?php// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "droame");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// SQL query to delete all data from a table
$sql = "DELETE * FROM booking";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "All data deleted successfully";
} else {
  echo "Error deleting data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>