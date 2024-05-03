<?php
// Connect to your database (replace these with your database credentials)
$host = "localhost";
$username = "root";
$password = "";
$database = "Tour";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$d=$_POST['destination'];
$a=$_POST['activity'];
$p=$_POST['person'];
$da=$_POST['tour_date'];

$query = "SELECT * FROM data WHERE dest = '$d' AND activty = '$a' AND person >= $p AND date = '$da'";
$result = $conn->query($query);

if (!$result) {
    // Display the SQL error if there is any
    echo "Error: " . $conn->error;
} elseif ($result->num_rows > 0) {
    // Tour is available - redirect to the booking page
    header("Location: booking.html");
    exit();
} else {
    // Tour is not available - display a message or handle it as needed
    echo "Sorry, the tour is not available for the specified criteria.";
}

$conn->close();
?>
