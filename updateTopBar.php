<?php
  // Connect to the database
  $conn = new mysqli('localhost', 'root', '', 'alvicreative');

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get the form data
  $name = $_POST['name'];
  $link = $_POST['link'];
  $topBarId = $_POST['topBarId'];

  // Update the record in the database
  $sql = "UPDATE topbar SET name='$name', link='$link' WHERE topBarId=$topBarId";
  if ($conn->query($sql) === TRUE) {
    // Return the updated data as a response
    $response = array(
      "name" => $name,
      "link" => $link,
      "topBarId" => $topBarId
    );
    echo json_encode($response);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
 

