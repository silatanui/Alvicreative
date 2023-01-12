<?php
    // Start the session
    session_start();

    $error = "";
    $username = "";
    $pass = "";
    $fullName = "";
    $email = "";


    // Check if the form has been submitted
    if (isset($_POST['submit'])) {

         // Connect to the database
         $conn = mysqli_connect("localhost", "root", "", "alvicreative");

         // Check if the connection was successful
         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
         }
 
         // Escape user inputs for security
         $username =  $_POST['username'];
         $pass =  $_POST['password'];
         $fullName = $_POST["fullName"];
         $email = $_POST["email"];

         function isValidPassword($pass) {
          $error = "";
        
          // Check if the password is at least 8 characters long
          if (strlen($pass) < 8) {
            $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i> Password must be at least 8 characters long</div>';
            return $error;
          }
        
          // Check if the password has at least one capital letter
          if (!preg_match('/[A-Z]/', $pass)) {
            $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i> Password must include at least one capital letter</div>';
            return $error;
          }
        
          // Check if the password has at least one small letter
          if (!preg_match('/[a-z]/', $pass)) {
            $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i> Password must include at least one small letter</div>';
            return $error;
          }
        
          // Check if the password has at least one special character
          if (!preg_match('/[^a-zA-Z0-9]/', $pass)) {
            $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i> Password must include at least one special character</div>';
            return $error;
          }
        
          return true;
        }

        $error = isValidPassword($pass);
        if ($error === true) {
          // The password is valid

          function isValidEmail($email) {
            $error = "";
          
            // Check if the email address is empty
            if (empty($email)) {

              $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i>  Email address cannot be empty</div>';
              return $error;
            }
          
            // Check if the email address is in a valid format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              
              $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i>  Invalid email address</div>';
              return $error;
            }
          
            return true;
          }

            $error = isValidEmail($email);
            if ($error === true) {
              // The email address is valid

              function isValidUsername($username) {
                $error = "";
              
                // Check if the username is empty
                if (empty($username)) {
                  $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i> Username cannot be empty</div>';
                  
                  return $error;
                }
              
                // Check if the username is too long (more than 32 characters)
                if (strlen($username) > 32) {
                  $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i> Username cannot be more than 32 characters</div>';
                  return $error;
                }
              
                // Check if the username contains invalid characters
                if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
                  $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i> Invalid characters in username</div>';
                  return $error;
                }
              
                return true;
              }

                $error = isValidUsername($username);
                if ($error === true) {

                   // The input is valid

                    // Check if the username is already in the "team" table
                    $query = "SELECT * FROM team WHERE username='$username'";
                    $result = mysqli_query($conn, $query);

                    // If the query returned any rows, it means the username is already taken
                    if (mysqli_num_rows($result) > 0) {
                        // Return a response indicating that the username is already taken
                        $error ='<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i>  Username Already Taken </div>' . $conn->error;
                    } else {
                        // Check if the email already in the "team" table
                        $query = "SELECT * FROM team WHERE Email='$email'";
                        $result = mysqli_query($conn, $query);
                        //If the query returned any rows, it means the email is already taken
                        if (mysqli_num_rows($result) > 0) {
                            // Return a response indicating that the email is already taken
                            $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i>  Email Already Registered </div>' . $conn->error;
                        } else {
                            $sql = "INSERT INTO team (FullName, Email, Username, Password)
                            VALUES ('$fullName', '$email', '$username', '$pass')";
                            
                            if ($conn->query($sql) === TRUE) {
                              $error = '<div class="error" id="error" style="background-color: green;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-user-check"></i> Registration Successful </div>';
                            } else {
                              $error = '<div class="error" id="error" style="background-color: red;color: white;padding: 10px;border-radius: 5px;"><i class="bx bx-x"></i>  Error in Registration </div>' . $conn->error;
                            }
                        }
                    }
                    
                    $conn->close();
                } else {
                  // The username is invalid
                  //echo $error;
                }

            } else {
              // The email address is invalid
              //echo $error;
            }

        } else {
          // The password is invalid
          //echo $error;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - Alvicreative</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Alvi-logo.png" rel="icon">
  <link href="assets/img/Alvi-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>


  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/Alvi-logo.png" alt="">
                  <span class="d-none d-lg-block"><span style="color:rgb(39, 185, 39);font-size:larger">ALVI</span><span style="color:black; font-size: larger;">CREATIVE</span></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>
                  
                  <?php if (isset($error)): ?>
                        <?php echo $error; ?>
                  <?php endif; ?>
                  <form method="post" id="registration-form"  >
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="fullName" class="form-control" value="<?php echo $fullName ?>"  required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" value="<?php echo $username ?>" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" value="<?php echo $pass ?>" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="https://alvicreativemarketinghub.com/">Alvicreative</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor//js/.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>