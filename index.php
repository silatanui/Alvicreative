<?php

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit;
}
else{
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - ALVICREATIVE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Alvi-logo.png" rel="icon">
  <link href="assets/img/Alvi-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <?php include("links.php") ?>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

 <?php include("header.php") ?> 
 <?php include('sidebar.php') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php 
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "alvicreative");

    
    $UserId = $_SESSION['UserId'];
    // Query the "team" table
    $sql = "SELECT * FROM team WHERE TeamId = $UserId";
    $result = mysqli_query($conn, $sql);

    // If a match is found, return "success"
    if (mysqli_num_rows($result) > 0) {
        while($team = mysqli_fetch_assoc($result)){
          $UserId = $team['TeamId'];
          $Username = $team['Username'];
          $About= $team['About'];
          $Password= $team['Password'];
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
      ?>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/team/<?php echo $Photo;?>" alt="Profile" class="rounded-circle" id="Image">
             
              <h2 id="Fullnameintro"> <?php echo $FullName;?></h2>
              <h3 id="Roleintro"> <?php echo $Role;?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic" id="Aboutintro"><?php echo $About ?></p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8" id="Fullnameintro"><?php echo $FullName ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Alvicreative Marketing Company</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8" id="Roleintro"><?php echo $Role ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">Kenya</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8" id="Addressintro">10200 - Kerugoya, Kenya</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $PhoneNumber?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $Email ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form id="update-user">
                    <div class="response" id="response">

                    </div>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/team/<?php echo $Photo;?>" alt="Profile" id="UpdateImage">
                        <div class="pt-2"> 
                           <button class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"><input type="file" name="" id="updatePhotoInput"></i></button>  
                                            
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="FullName" value="<?php echo $FullName;?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea class="form-control" id="about" value="<?php echo $About ?>" name="about" required rows="10"></textarea>
                      </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                        // Get the input elements
                        
                        var about = document.getElementById('about');

                        // Set the value of the input elements
                        
                          about.value = '<?php echo  $About ?>';

                       // Set the number of rows of the textarea based on the length of the content
                          textarea.rows = textarea.value.split('\n\n\n').length;
                        
                        });

                    </script>
                  
                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Role</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="<?php echo $Role ?>">
                      </div>
                    </div>
                   

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?php echo $Address?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $PhoneNumber?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $Email?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="<?php echo $Twitter?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="<?php echo $Facebook;?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="<?php echo $Instagram;?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="<?php echo $LinkedIn;?>">
                      </div>
                    </div>
                    

                    <input type="hidden" name="UserId" id="UserId" value="<?php echo $_SESSION['UserId'] ?>">

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
               
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form id="password-form">
                  <div class="form-group my-2">
                    <label for="current-password">Current Password</label>
                    <input type="password" class="form-control" id="current-password" required>
                    <div id="current-password-error" class="invalid-feedback"></div>
                  </div>
                  <div class="form-group my-2">
                    <label for="new-password">New Password</label>
                    <input type="password" class="form-control" id="new-password" required>
                    <div id="new-password-error" class="invalid-feedback"></div>
                  </div>
                  <div class="form-group my-2">
                    <label for="reenter-password">Re-enter New Password</label>
                    <input type="password" class="form-control" id="reenter-password" required>
                    <div id="reenter-password-error" class="invalid-feedback"></div>
                  </div>
                  <button type="submit my-2" class="btn btn-primary">Change Password</button>
                </form>

                  <script>
                    document.getElementById('password-form').addEventListener('submit', function(event) {
                    event.preventDefault();

                    // Get the input elements
                    var currentPassword = document.getElementById('current-password');
                    var newPassword = document.getElementById('new-password');
                    var reenterPassword = document.getElementById('reenter-password');

                    // Get the error message elements
                    var currentPasswordError = document.getElementById('current-password-error');
                    var newPasswordError = document.getElementById('new-password-error');
                    var reenterPasswordError = document.getElementById('reenter-password-error');

                    // Reset the error messages
                    currentPasswordError.innerHTML = '';
                    newPasswordError.innerHTML = '';
                    reenterPasswordError.innerHTML = '';
                    currentPassword.classList.remove('is-invalid');
                    newPassword.classList.remove('is-invalid');
                    reenterPassword.classList.remove('is-invalid');

                    // Validate the form
                    if (currentPassword.value !== '<?php echo $Password ?>') {
                      currentPasswordError.innerHTML = 'Incorrect password';
                      currentPassword.classList.add('is-invalid');
                    }
                    if (newPassword.value !== reenterPassword.value) {
                      newPasswordError.innerHTML = 'Passwords do not match';
                      reenterPasswordError.innerHTML = 'Passwords do not match';
                      newPassword.classList.add('is-invalid');
                      reenterPassword.classList.add('is-invalid');
                    }
                    // Submit the form if there are no errors
                    if (!currentPasswordError.innerHTML && !newPasswordError.innerHTML && !reenterPasswordError.innerHTML) {
                      // The form is valid, submit it here
                      // Use Ajax to submit the form
                      var xhr = new XMLHttpRequest();
                      xhr.open('POST', 'updatepassword.php');
                      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                      xhr.onload = function() {
                        if (xhr.status === 200) {
                          // The password was successfully updated
                          alert('Password updated');
                        } else {
                          // There was an error updating the password
                          alert('Error updating password');
                        }
                      };
                      xhr.send('currentPassword=' + currentPassword.value + '&newPassword=' + newPassword.value);
                    }
                  });
                  </script>
                </div>

              </div><!-- End Bordered Tabs -->

              <?php 
                 
                }
              }
               ?>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Alvicreative</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Designed by <a href="https://alvicreativemarketinghub.co.ke">Alvicreative</a>
    </div>
  </footer><!-- End Footer -->

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
  <script src="assets/js/updateuser.js"></script>

</body>

</html>