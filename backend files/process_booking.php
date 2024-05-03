<?php
// Connect to your database (replace these details with your actual database connection details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];
$numGuests = $_POST['numGuests'];
$package = $_POST['package'];
$tourGuide = $_POST['tourGuide'];
$quantity = $_POST['quantity'];

// Insert data into database
$sql = "INSERT INTO book (check_in_date, check_out_date, num_guests, package, tour_guide, quantity) VALUES ('$checkInDate', '$checkOutDate', '$numGuests', '$package', '$tourGuide', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Booking successful!');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
