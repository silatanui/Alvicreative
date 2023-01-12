<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alvicreative";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$updatePhoto = $_FILES['updatePhoto'];
$updateName = $_POST['updateName'];
$updateHeader = $_POST['updateHeader'];
$updateParagraph = $_POST['updateParagraph'];
$HeroId = $_POST['HeroId'];

// Update the database
$sql = "UPDATE hero SET Name='$updateName', Header='$updateHeader', ParagraphText='$updateParagraph'";

if (!empty($updatePhoto['name'])) { // If a new photo was uploaded
  
  $fileName = $updatePhoto['name'];

      // Save the photo to the server
    $fileName = basename($updatePhoto['name']);
    $filePath = "assets/img/slide/$fileName";
    move_uploaded_file($updatePhoto['tmp_name'], $filePath);

    // Update the database with the new photo file name
    $sql .= ", Photo='$fileName'";
} else {
    // Get the existing photo file name from the database
    $result = mysqli_query($conn, "SELECT Photo FROM hero WHERE HeroId= $HeroId");
    $row = mysqli_fetch_assoc($result);
    $filePath = $row['Photo'];
    }

$sql .= " WHERE HeroId= $HeroId"; // Update the record with the specified ID

if (mysqli_query($conn, $sql)) {
        // Get the updated data from the database
        $result = mysqli_query($conn, "SELECT * FROM hero WHERE HeroId=$HeroId");
        $row = mysqli_fetch_assoc($result);
      
        // Create an array with the updated data
        $response = array(
          'name' => $row['Name'],
          'header' => $row['Header'],
          'paragraph' => $row['ParagraphText'],
          'photo' => $row['Photo']
        );
      
        // Encode the array as a JSON string and send it back as the response
        echo json_encode($response);
} else {
  // echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
