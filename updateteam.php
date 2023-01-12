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
$TeamId = $_POST['TeamId'];
$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$about = $_POST['about'];

// Update the database
$sql = "UPDATE team SET FullName = '$name', Email = '$email', Role = '$role', PhoneNumber = '$phone', Address = '$address', About = '$about'";

if (isset($_FILES['photo'])) { // If a new photo was uploaded
  $updatePhoto = $_FILES['photo'];
  $fileName = $updatePhoto['name'];

  // Save the photo to the server
  $fileName = basename($updatePhoto['name']);
  $filePath = "assets/img/team/$fileName";
  move_uploaded_file($updatePhoto['tmp_name'], $filePath);

  // Update the database with the new photo file name
  $sql .= ", Photo='$fileName' ";
} else {
  // Get the existing photo file name from the database
  $result = mysqli_query($conn, "SELECT Photo FROM team WHERE TeamId = '$TeamId'");
  $row = mysqli_fetch_assoc($result);
  $filePath = $row['Photo'];
}

$sql .= " WHERE  TeamId = '$TeamId' "; // Update the record with the specified ID

if (mysqli_query($conn, $sql)) {
  // Get the updated data from the database
  $result = mysqli_query($conn, "SELECT * FROM team WHERE TeamId ='$TeamId' ");
  $row = mysqli_fetch_assoc($result);

  // Create an array with the updated data
  $response = array(
    'role' => $row['Role'],
    'about' => $row['About'],
    'email' => $row['Email'],
    'name' => $row['FullName'],
    'photo' => $row['Photo']
  );

  // Encode the array as a JSON string and send it back as the response
  echo json_encode($response);
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
