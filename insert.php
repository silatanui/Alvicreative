<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alvicreative";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pass = $_POST["password"];



// Check if the username is already in the "team" table
$query = "SELECT * FROM team WHERE username='$username'";
$result = mysqli_query($conn, $query);

// If the query returned any rows, it means the username is already taken
if (mysqli_num_rows($result) > 0) {
    // Return a response indicating that the username is already taken
    $responseText = '<div class="alert alert-danger mx-auto" role="alert">
    <strong>Username Already Taken</strong>
  </div> ' . $conn->error;
} else {
    // Check if the email already in the "team" table
    $query = "SELECT * FROM team WHERE Email='$email'";
    $result = mysqli_query($conn, $query);
    //If the query returned any rows, it means the email is already taken
    if (mysqli_num_rows($result) > 0) {
        // Return a response indicating that the email is already taken
        $responseText = '<div class="alert alert-danger mx-auto" role="alert">
        <strong>Email Already Taken</strong>
    </div> ' . $conn->error;
    } else {
        $sql = "INSERT INTO team (FullName, Email, Username, Password)
        VALUES ('$fullName', '$email', '$username', '$pass')";
        
        if ($conn->query($sql) === TRUE) {
          $responseText = '<div class="alert alert-success mx-auto" role="alert">
          <strong>Registration Successful</strong>
        </div>';
        } else {
          $responseText = '<div class="alert alert-danger mx-auto" role="alert">
          <strong>Error in Registration</strong>
        </div> ' . $conn->error;
        }
    }
}
echo $responseText;
$conn->close();
