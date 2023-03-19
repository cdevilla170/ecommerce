<?php
// Connect to the MySQL database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check for errors in the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the user's data from the database
$sql = "SELECT * FROM users WHERE id = '123'"; // Replace '123' with the user's ID
$result = mysqli_query($conn, $sql);

// Check for errors in the query
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Display the user's data
$row = mysqli_fetch_assoc($result);
echo "User ID: " . $row["id"] . "<br>";
echo "Username: " . $row["username"] . "<br>";
echo "Email: " . $row["email"] . "<br>";

// Close the database connection
mysqli_close($conn);
?>