<?php

// get the form data
$UserId = $_POST['TeamId'];
$FullName = $_POST['name'];
$About = $_POST['about'];
$Job = $_POST['role'];
$Address = $_POST['address'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Twitter = $_POST['twitter'];
$Facebook = $_POST['facebook'];
$Instagram = $_POST['instagram'];
$Linkedin = $_POST['linkedin'];

// connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "alvicreative";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// update the data in the database
$sql = "UPDATE team SET FullName='$FullName', About='$About', Role='$Job', Address='$Address', PhoneNumber='$Phone', Email='$Email', Twitter='$Twitter', Facebook='$Facebook', Instagram='$Instagram', Linkedin='$Linkedin'";

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
  $result = mysqli_query($conn, "SELECT Photo FROM team WHERE TeamId = $UserId");
  $row = mysqli_fetch_assoc($result);
  $filePath = $row['Photo'];
}

$sql .= " WHERE TeamId = $UserId "; // Update the record with the specified ID

if (mysqli_query($conn, $sql)) {
  // Get the updated data from the database
  $result = mysqli_query($conn, "SELECT * FROM team WHERE TeamId = $UserId ");
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
