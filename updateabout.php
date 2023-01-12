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
$aboutId = $_POST['aboutId'];
$aboutParagraph = $_POST['paragraph'];
$mission = $_POST['mission'];
$vision = $_POST['vision'];

// Update the database
$sql = "UPDATE about SET AboutParagraph = '$aboutParagraph', Mission = '$mission', Vision = '$vision'";

if (isset($_FILES['photo'])) { // If a new photo was uploaded
  $updatePhoto = $_FILES['photo'];
  $fileName = $updatePhoto['name'];

  // Save the photo to the server
  $fileName = basename($updatePhoto['name']);
  $filePath = "assets/img/$fileName";
  move_uploaded_file($updatePhoto['tmp_name'], $filePath);

  // Update the database with the new photo file name
  $sql .= ", Photo='$fileName'";
} else {
  // Get the existing photo file name from the database
  $result = mysqli_query($conn, "SELECT Photo FROM about WHERE AboutId = $aboutId");
  $row = mysqli_fetch_assoc($result);
  $filePath = $row['Photo'];
}

$sql .= " WHERE  AboutId = $aboutId "; // Update the record with the specified ID

if (mysqli_query($conn, $sql)) {
  // Get the updated data from the database
  $result = mysqli_query($conn, "SELECT * FROM about WHERE AboutId =$aboutId ");
  $row = mysqli_fetch_assoc($result);

  // Create an array with the updated data
  $response = array(
    'vision' => $row['Vision'],
    'mission' => $row['Mission'],
    'paragraph' => $row['AboutParagraph'],
    'photo' => $row['Photo']
  );

  // Encode the array as a JSON string and send it back as the response
  echo json_encode($response);
} else {
  // echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
