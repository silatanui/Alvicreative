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
  $name =$_POST['name'];
  $role =$_POST['role'];
  $email =$_POST['email'];
  $phone =$_POST['phone'];
  $about =$_POST['about'];
  $twitter =$_POST['twitter'];
  $facebook =$_POST['facebook'];
  $instagram =$_POST['instagram'];
  $linkedin =$_POST['linkedin'];
 
if (isset($_FILES['photo'])) { // If a new photo was uploaded
    $updatePhoto = $_FILES['photo'];
    $fileName = $updatePhoto['name'];
  
    // Save the photo to the server
    $fileName = basename($updatePhoto['name']);
    $filePath = "assets/img/team/$fileName";
    move_uploaded_file($updatePhoto['tmp_name'], $filePath);
  
    // Check if the name or email already exists in the database
      $checkSql = "SELECT FullName, Email FROM team WHERE FullName = '$name' OR Email = '$email'";
      $checkResult = mysqli_query($conn, $checkSql);
      if (mysqli_num_rows($checkResult) > 0) {
        // A person with the same name or email already exists in the database
        $Error = "Error: A person with the same name or email already exists in the database.";
        // $success = ""; 
        $response = array();
        $response[] = array(
          'Error' => $Error
        );
        echo json_encode($response);
      } else {
        // The name and email are unique, so we can proceed with inserting the new team member
        $sql = "INSERT INTO team (FullName, Email, Role, PhoneNumber, About, Twitter, Facebook, Instagram, LinkedIn, Photo)
        VALUES ('$name', '$email', '$role', '$phone', '$about', '$twitter', '$facebook', '$instagram', '$linkedin', '$fileName')";
        if (mysqli_query($conn, $sql)) {
          // The team member was inserted successfully
          $success = "The team member was inserted successfully.";
          if (mysqli_query($conn, $sql)) {
            $sql = "SELECT * FROM team";
            $result = mysqli_query($conn, $sql);
        
            $response = array();
            // while ($row = mysqli_fetch_assoc($result)) {
            //   $name = $row['FullName'];
            //   $email = $row['Email'];
            //   $role = $row['Role'];
            //   $phone = $row['PhoneNumber'];
            //   $about = $row['About'];
            //   $twitter = $row['Twitter'];
            //   $facebook = $row['Facebook'];
            //   $instagram = $row['Instagram'];
            //   $linkedin = $row['LinkedIn'];
            //   $photo = $row['Photo'];
        
            //   $response[] = array(
            //     'success' => $success,
            //     'name' => $name,
            //     'email' => $email,
            //     'role' => $role,
            //     'phone' => $phone,
            //     'about' => $about,
            //     'twitter' => $twitter,
            //     'facebook' => $facebook,
            //     'instagram' => $instagram,
            //     'linkedin' => $linkedin,
            //     'photo' => $photo
            //   );
            // }
            $response[] = array(
              'success' => $success
            );
            echo json_encode($response);
        
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        
        } else {
          // There was an error inserting the team member
          echo "Error: There was an error inserting the team member.";
        }
      }
  } else{

  }
  mysqli_close($conn);
?>
