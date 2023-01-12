<?php

// Database credentials
$db_host = 'localhost';
$db_name = 'alvicreative';
$db_user = 'root';
$db_pass = '';

// Connect to the database
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the TeamId from the request
$TeamId = $_POST['TeamId'];

// Delete the record from the database
$sql = "DELETE FROM team WHERE TeamId = $TeamId";
$result = mysqli_query($conn, $sql);

// Check if the delete operation was successful
if ($result) {
  $response = array(
    'status' => 'success',
    'message' => 'Record deleted successfully'
  );
} else {
  $response = array(
    'status' => 'fail',
    'message' => 'Error deleting record: ' . mysqli_error($conn)
  );
}

// Return the response as JSON
echo json_encode($response);

// Close the database connection
mysqli_close($conn);

?>
