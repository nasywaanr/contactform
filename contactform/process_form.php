<?php
// Database connection
$servername = "localhost";
$username = "root";  // Use your database username
$password = "";  // Use your database password
$dbname = "contact_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data with checking if key exists
$name = $_POST['name'];
$email = $_POST['email'];
$nim = $_POST['nim'];
$message = $_POST['message'];
$gender = $_POST['gender'];

// Insert data into database
$sql = "INSERT INTO contacts (name, email, nim, message, gender) VALUES ('$name', '$email', 'nim', '$message', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Thank you for contacting us!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
