<?php
// Step 1: Connecting to the MySQL Database
$servername = "localhost"; // Change this to your database host
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "portfolio"; // Change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Getting Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Step 3: Preparing the SQL Query
$sql = "INSERT INTO contact_us (name, email, number, subject, message) 
        VALUES ('$name', '$email', '$number', '$subject', '$message')";

// Step 4: Executing the Query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
