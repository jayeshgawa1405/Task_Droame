<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "droame";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


 $id = $_POST['id'];
$name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $location = $_POST['location'];
 $date = $_POST['date'];
 //$newContent = $_POST['new_content'];
  //$Content = $_POST['content'];
 $sql = "UPDATE booking SET name='".$name."',email='".$email."',phone='".$phone."',location='".$location."',date='".$date."' WHERE id=".$id;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
