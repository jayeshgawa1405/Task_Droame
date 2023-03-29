
<?php
//Submit data
// Get the form data
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$date = $_POST['date'];

// Validate the form data 
if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($location) || empty($date)) {
    echo "Please fill in all the fields.";
    exit;
}

// Connect to the database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'droame';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the booking into the database
$sql = "INSERT INTO booking (id, name, email, phone, location, date) VALUES ('$id', '$name', '$email', '$phone', '$location', '$date')";
if (mysqli_query($conn, $sql)) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
