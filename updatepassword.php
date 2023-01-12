<?php

// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'alvicreative';
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the current and new passwords from the request
$currentPassword = mysqli_real_escape_string($conn, $_POST['currentPassword']);
$newPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);

// Update the password in the database
$sql = "UPDATE team SET Password = '$newPassword' WHERE Password = '$currentPassword'";
if (mysqli_query($conn, $sql)) {
  // The password was successfully updated
  http_response_code(200);
} else {
  // There was an error updating the password
  http_response_code(500);
}

// Close the connection
mysqli_close($conn);

