<?php
// Handle form data and store it in the database (replace with your database logic)
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];

// Perform database operations (you'll need to set up a database and connection)
// Example using MySQLi:
$mysqli = new mysqli("localhost", "root", "", "admin");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "INSERT INTO adde (firstname, lastname, phonenumber, email, password) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$password')";

if ($mysqli->query($sql) === TRUE) {
echo "New record created successfully";
    header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
