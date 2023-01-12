<?php
    // Start the session
    session_start();

    $error = "";
    $username = "";
    $pass = "";

    // Check if the form has been submitted
    if (isset($_POST['submit'])) {

         // Connect to the database
         $conn = mysqli_connect("localhost", "root", "", "alvicreative");

         // Check if the connection was successful
         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
         }
 
         // Escape user inputs for security
         $username = mysqli_real_escape_string($conn, $_POST['username']);
         $pass = mysqli_real_escape_string($conn, $_POST['password']);

        
          // The password is valid
          // Query the "team" table
         $sql = "SELECT * FROM team WHERE Username = '$username' AND Password = '$pass'";
         $result = mysqli_query($conn, $sql);

         // If a match is found, return "success"
         if (mysqli_num_rows($result) > 0) {
            while($team = mysqli_fetch_assoc($result)){
               $UserId = $team['TeamId'];
               $Username = $team['Username'];
               $About= $team['About'];
               $Photo = $team['Photo'];
               $Email = $team['Email'];
               $FullName = $team['FullName'];
               $Role = $team['Role'];
               $Email = $team['Email'];
               $PhoneNumber= $team['PhoneNumber'];
               $Address= $team['Address'];
               $Facebook = $team["Facebook"]; 
               $Instagram = $team["Instagram"];
               $LinkedIn= $team["LinkedIn"];
               $Twitter =$team["Twitter"];


               // Login is successful, set the logged_in session variable to true
               // Set the session variables
               $_SESSION["UserId"] = $UserId;
               $_SESSION["Username"] = $Username;
               $_SESSION["About"] = $About;
               $_SESSION["Photo"] = $Photo;
               $_SESSION["Email"] = $Email;
               $_SESSION["FullName"] = $FullName;
               $_SESSION["Role"] = $Role;
               $_SESSION["PhoneNumber"] = $PhoneNumber;
               $_SESSION["Email"] = $Email;
               $_SESSION["Address"] = $Address;
               $_SESSION["Facebook"] = $Facebook;
               $_SESSION["Instagram"] = $Instagram;
               $_SESSION["LinkedIn"] = $LinkedIn;
               $_SESSION["Twitter"] = $Twitter;

               $_SESSION['logged_in'] = true;

               // Redirect the user to the index page
               header("Location: index.php");
               exit;
            }
        } else {
            // Login is unsuccessful, set an error message
            $error = '<div class="error-message" id="error-message">Invalid username or password</div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Alvi-logo.png" rel="icon">
  <link href="assets/img/Alvi-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <?php include('links.php') ?>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">


</head>
<style>
  .input-group .form-control[type='password']::before {
  content: '\f06e';
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  position: absolute;
  top: 0;
  left: 0;
  width: 45px;
  height: calc(100% - 2px);
  display: flex;
  align-items: center;
  padding-left: 10px;
  color: #ccc;
}
#error-message {
  position: relative;
  display: flex;
  align-items: center;
  padding: 10px 45px 10px 60px;
  color: #ffffff;
  background-color: red; /* Red */
  border-radius: 4px;
  font-size: 14px;
}

#error-message::before {
  content: '\f071';
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  position: absolute;
  top: 0;
  left: 0;
  width: 45px;
  height: calc(100% - 2px);
  display: flex;
  align-items: center;
  padding-left: 10px;
  color: #ffffff;
}
#password {
  border-radius: 4px 0 0 4px;
  border: 1px solid #ccc;
  box-shadow: none;
  transition: all 0.3s ease;
}

#password:focus {
  border: 1px solid #66afe9;
  box-shadow: 0 0 8px rgba(102, 175, 233, 0.6);
}

.input-group-append {
  border-radius: 0 4px 4px 0;
  background-color: #e9ecef;
  border: 1px solid #ccc;
}

.input-group-append button {
  border: none;
  background-color: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
}

.input-group-append button:hover {
  background-color: #dee2e6;
}

.input-group-append button:active {
  background-color: #ced4da;
}

.input-group-append button i {
  font-size: 18px;
  color: #6c757d;
}

.input-group-append button:hover i {
  color: #495057;
}

.input-group-append button:active i {
  color: #343a40;
}

</style>
<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">

                <div class="card-body">
                <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/Alvi-logo.png" alt="">
                  <span class="d-none d-lg-block">ALVICREATIVE</span>
                </a>
              </div><!-- End Logo -->

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <?php if (isset($error)): ?>
                        <?php echo $error; ?>
                  <?php endif; ?>

                  <form method="post" class="row g-3 needs-validation" novalidate > 

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" value="<?php echo $username ?>" class="form-control" id="username" required>
                        <div class="invalid-feedback" >Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <div class="input-group">
                        <input type="password" name="password" value="<?php echo $pass ?>" class="form-control" id="password" required>
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="show-password"><i class="fa fa-eye"></i></button>
                        </div>
                      </div>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <script>
                      document.getElementById('show-password').addEventListener('click', function(event) {
                      var password = document.getElementById('password');
                      var icon = document.getElementById('show-password').firstChild;
                      if (password.type === 'password') {
                        password.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                      } else {
                        password.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                      }
                    });

                    </script>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100"  type="submit" name="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>
                  <script>
                    document.getElementById('form').addEventListener('submit', function(event) {
                  // Get the input elements
                  var username = document.getElementById('username');
                  var password = document.getElementById('password');

                  // Get the error message elements
                  var usernameError = document.getElementById('username-error');
                  var passwordError = document.getElementById('password-error');

                  // Reset the error messages
                  usernameError.innerHTML = '';
                  passwordError.innerHTML = '';
                  username.classList.remove('is-invalid');
                  password.classList.remove('is-invalid');

                  // Validate the form
                  if (!username.value) {
                    usernameError.innerHTML = 'Please enter your username';
                    username.classList.add('is-invalid');
                    event.preventDefault();
                  }
                  if (!password.value) {
                    passwordError.innerHTML = 'Please enter your password';
                    password.classList.add('is-invalid');
                    event.preventDefault();
                  }
                  if (!username.checkValidity()) {
                    usernameError.innerHTML = username.validationMessage;
                    username.classList.add('is-invalid');
                    event.preventDefault();
                  }
                });

                  </script>
                </div>
              </div>

              <div class="credits">
                Designed by <a href="https://alvicreativemarketinghub.co.ke">Alvicreative</a>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/login.js"></script>

</body>

</html>