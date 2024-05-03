<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate user input (perform more thorough validation as needed)
    if (empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        // Connect to your database (replace these with your database details)
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "admin";

        // Create connection
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to check if the user exists
        $sql = "SELECT * FROM adde WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User exists, redirect to home page (replace 'index.html' with your actual home page)
            header("Location: index.html");
            exit();
        } else {
            // User doesn't exist or credentials are incorrect
            echo "Incorrect email or password. Please try again.";
        }

        // Close connection
        $conn->close();
    }
}
?>
