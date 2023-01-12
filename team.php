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

  <title>Components / Accordion - Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('links.php') ?>

  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/team.css" rel="stylesheet">
  

</head>
<style>
  
  select[name=dial-code] {
    background-repeat: no-repeat;
    background-position: right center;
    padding-right: 30px;
  }
  
  select[name=dial-code] option {
    background-size: 20px;
  }

  select[name=dial-code] option[data-flag=ke] {
    background-image: url('assets/img/flags/kenya.png');
  }

  select[name=dial-code] option[data-flag=ug] {
    background-image: url('assets/img/flags/uganda.png');
  }
  select[name=dial-code] option[data-flag=ug] {
    background-image: url('assets/img/flags/uganda.png');
  }
  select[name=dial-code] option[data-flag=et] {
    background-image: url('assets/img/flags/ethiopia.png');
  }

  select[name=dial-code] option[data-flag=bi] {
    background-image: url('assets/img/flags/burundi.png');
  }

  select[name=dial-code] option[data-flag=rw] {
    background-image: url('assets/img/flags/rwanda.png');
  }

  select[name=dial-code] option[data-flag=tz] {
    background-image: url('assets/img/flags/tanzania.png');
  }

  select[name=dial-code] option[data-flag=zm] {
    background-image: url('assets/img/flags/zambia.png');
  }

  select[name=dial-code] option[data-flag=za] {
    background-image: url('assets/img/flags/south-africa.png');
  }

  select[name=dial-code] option[data-flag=ng] {
    background-image: url('assets/img/flags/nigeria.png');
  }
  
  select[name=dial-code] option[data-image]:before {
    content: '';
    background-image: url('');
    background-size: 20px;
    display: inline-block;
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 10px;
  }

</style>
<body>

  <?php include "header.php" ?>

  <?php include "sidebar.php" ?>


  <!-- Main Section -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>About Us Review</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item">Homepage</li>
          <li class="breadcrumb-item active">About Us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
       
        <section class="section profile">
     
            <div class="col-xl-12"> <!-- Start of col-xl-12 -->

            <div class="card">  <!-- Bordered Tabs -->
                <div class="card-body pt-3"> <!-- Start of card-body -->
              
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">About Us Overview</button>
                    </li>
                  

                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Tabular Representation</button>
                    </li>

                </ul>
                <!-- About Us Overview -->
                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-overview my-3" id="profile-overview">
                    <p>Welcome to the Alvicreative marketing company team update page. This page is designed to help you update and manage the information of the team members on the company website. You can update their names, positions, photos, and descriptions to ensure that the website accurately reflects the current team members. Simply click on the edit button next to each team member's information, make the desired changes, and click the update button to save the changes. Thank you for helping us keep our website up to date and accurate.</p>

                        <!-- ======= Our Team Section ======= -->
                        <section id="team" class="team" style="margin-top: 10px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="container" data-aos="fade-up">
                    
                            <div class="section-title">
                                <h2>Our Team</h2>
                                <p>At Alvicreative, our team is dedicated to delivering high-quality marketing solutions for our clients. With a diverse range of skills and experience, we are well-equipped to handle all of your marketing needs. Whether you're looking for help with branding, advertising, or social media management, our team is here to help you achieve your goals. We are passionate about what we do and we are committed to delivering exceptional results for our clients. Contact us today to learn more about how we can help your business succeed.</p>
                            </div>
                    
                            <div class="row">
                    
                            <?php
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            // Connect to the database
                            $db = new mysqli("localhost", "root", "", "alvicreative");

                            // Check for errors
                            if ($db->connect_error) {
                                die("Connection failed: " . $db->connect_error);
                            }

                            // Select all rows from the about table
                            $result = $db->query("SELECT * FROM team");

                            // Check if the query was successful
                            if ($result) {
                            
                                while ($row = $result->fetch_assoc()) {?>
    
                                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                                <div class="member">
                                    <div class="pic"><img src="assets/img/team/<?php echo $row['Photo'] ?>" class="img-fluid" alt="" style="height:39vh;" id="Newimage<?php echo $row['TeamId'] ?>"></div>
                                    <div class="member-info">
                                    <h4 id="introname<?php echo $row['TeamId'] ?>"><?php echo $row['FullName'] ?></h4>
                                    <span id="introrole<?php echo $row['TeamId'] ?>"><?php echo $row['Role'] ?></span>
                                    <div class="social">
                                        <a href="<?php echo $row['Twitter'] ?>"><i class="bi bi-twitter"></i></a>
                                        <a href="<?php echo $row['Facebook'] ?>"><i class="bi bi-facebook"></i></a>
                                        <a href="<?php echo $row['Instagram'] ?>"><i class="bi bi-instagram"></i></a>
                                        <a href="<?php echo $row['LinkedIn'] ?>"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <?php }
                                } else {
                                    // Output an error message if the query fails
                                    echo "Error: " . $db->error;
                                }
                                // Close the database connection
                                $db->close();
                                ?>
                            </div>
                    
                            </div>
                        </section><!-- End Our Team Section -->
                    </div>
        
                    <div class="tab-pane fade pt-3" id="profile-settings">
                        <h5 class="card-title">About us Details</h5>
                        <p>This page allows the user to customize the content displayed in the About us and top bar on the website. The user has the option to upload a new background photo for the About us and top bar, update the About us text that appears over the photo, and add a name of content to be displayed alongside the photo. These updates will be reflected on the website immediately upon saving the changes. This page provides an easy way for the user to keep the About us and top bar content fresh and relevant to their audience.</p>

                        <?php
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            // Connect to the database
                            $db = new mysqli("localhost", "root", "", "alvicreative");

                            // Check for errors
                            if ($db->connect_error) {
                                die("Connection failed: " . $db->connect_error);
                            }

                            // Select all rows from the about table
                            $result = $db->query("SELECT * FROM team");

                            // Check if the query was successful
                            if ($result) { ?> 
                           <!-- Default Card -->
                        <div class="card">
                            <div class="card-body ">
                              <div class="row">
                                <div class="col">
                                  <h5 class="card-title">About Page</h5>
                                </div>
                                 <div class="col my-3 mr-auto">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTeamModal">
                                    <i class="fas fa-plus"></i> Add Team
                                  </button>
                                 </div>
                              </div>
                              <!-- Modal -->
                              <div class="modal fade" id="addTeamModal" tabindex="-1" role="dialog" aria-labelledby="addTeamModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-md" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="addTeamModalLabel">Add Team</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                      <div class="modal-body">
                                      <form id="add-team-form" method="post" enctype="multipart/form-data">
                                      <div class="response my-2 p-2" id="response"></div>
                                      <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="role">Role</label>
                                        <input type="text" class="form-control" id="role" name="role" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea class="form-control" id="about" name="about" rows="3"></textarea >
                                      </div>
                                      <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
                                      </div>
                                      <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <select class="form-control" id="dial-code" name="dial-code" required>
                                            <option value="">Select Dial Code</option>
                                            <option value="+254" data-flag="ke">+254 (Kenya)</option>
                                            <option value="+256" data-flag="ug">+256 (Uganda)</option>
                                            <option value="+251" data-flag="et">+251 (Ethiopia)</option>
                                            <option value="+257" data-flag="bi">+257 (Burundi)</option>
                                            <option value="+250" data-flag="rw">+250 (Rwanda)</option>
                                            <option value="+255" data-flag="tz">+255 (Tanzania)</option>
                                            <option value="+260" data-flag="zm">+260 (Zambia)</option>
                                            <option value="+27" data-flag="za">+27 (South Africa)</option>
                                            <option value="+234" data-flag="ng">+234 (Nigeria)</option>
                                            </select>
                                          </div>
                                          <input type="tel" class="form-control" id="phone" name="phone" required>
                                         
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" class="form-control" id="instagram" name="instagram" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="linkedin">LinkedIn</label>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <input type="file" class="form-control-file" id="photo" name="photo" required>
                                      </div>
                                    </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" id="add-team">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <script>
                                   $('#add-team').on('click', function() {  
                                  // Listen for submit event on the form
                                  
                                    event.preventDefault();
                                    
                                        // All required fields have a value, so we can proceed with collecting the values
                                        var name = $('#name').val();
                                        var role = $('#role').val();
                                        var about = $('#about').val();
                                        var email = $('#email').val();
                                        var phone = $('#phone').val();
                                        var twitter = $('#twitter').val();
                                        var facebook = $('#facebook').val();
                                        var instagram = $('#instagram').val();
                                        var linkedin = $('#linkedin').val();
                                        var photo = $('#photo')[0].files[0];

                                        if (!name || !role || !about || !email || !phone || !twitter || !facebook || !instagram || !linkedin || !photo) {
                                          // One or more fields have an empty value
                                        // Add a red border to the empty fields
                                      if (!name) {
                                        $('#name').css({'border':'2px solid red'});
                                      }else{
                                        $('#name').css({'border':'2px solid green'});
                                      }
                                      if (!role) {
                                        $('#role').css({'border':'2px solid red'});
                                      }else{
                                        $('#role').css({'border':'2px solid green'});
                                      }
                                      if (!about) {
                                        $('#about').css({'border':'2px solid red'});
                                      }else{
                                        $('#about').css({'border':'2px solid green'});
                                      }
                                      if (!email) {
                                        $('#email').css({'border':'2px solid red'});
                                      }else{
                                        $('#email').css({'border':'2px solid green'});
                                      }
                                      if (!phone) {
                                        $('#phone').css({'border':'2px solid red'});
                                      }else{
                                        $('#phone').css({'border':'2px solid green'});
                                      }
                                      if (!twitter) {
                                        $('#twitter').css({'border':'2px solid red'});
                                      }else{
                                        $('#twitter').css({'border':'2px solid green'});
                                      }
                                      if (!facebook) {
                                         $('#facebook').css({'border':'2px solid red'});
                                      }else{
                                        $('#facebook').css({'border':'2px solid green'});
                                      }
                                      if (!instagram) {
                                        $('#instagram').css({'border':'2px solid red'});
                                      }else{
                                        $('#instagram').css({'border':'2px solid green'});
                                      }
                                     if (!linkedin) {
                                       $('#linkedin').css({'border':'2px solid red'});
                                     }else{
                                        $('#linkedin').css({'border':'2px solid green'});
                                      }
                                     if (!photo) {
                                      $('#photo').css({'border':'2px solid red'});
                                     }else{
                                        $('#photo').css({'border':'2px solid green'});
                                      } 
                                          $('#response').html('Please fill out all fields');
                                                 // Add success CSS to the response division
                                                 $('#response').css({
                                                    'background-color': '#ff4d4d',
                                                    'color' : 'white',
                                                    'font-weight': 'bold'
                                                    });
                                        } else {

                                          $('#name').css({'border':'2px solid green'});
                                          $('#role').css({'border':'2px solid green'});
                                          $('#email').css({'border':'2px solid green'});
                                          $('#phone').css({'border':'2px solid green'});
                                          $('#twitter').css({'border':'2px solid green'});
                                          $('#facebook').css({'border':'2px solid green'});
                                          $('#instagram').css({'border':'2px solid green'});
                                          $('#linkedin').css({'border':'2px solid green'});
                                          $('#photo').css({'border':'2px solid green'});
                                        // Collect the form data
                                        var formData = new FormData();
                                        formData.append('photo', photo);
                                        formData.append('name', name);
                                        formData.append('role', role);
                                        formData.append('email', email);
                                        formData.append('phone', phone);
                                        formData.append('about', about);
                                        formData.append('twitter', twitter);
                                        formData.append('facebook', facebook);
                                        formData.append('instagram', instagram);
                                        formData.append('linkedin', linkedin);

                                        // Set up an AJAX request
                                        $.ajax({
                                          type: 'POST',
                                          url: 'insertuser.php',
                                          processData: false, // Tell jQuery not to process the data
                                          contentType: false, // Tell jQuery not to set the content type
                                          data: formData,
                                          success: function(response) {
                                            // Handle success
                                              var data = JSON.parse(response);
                                              // Get the error message from the response
                                              // Get the first object in the array
                                              var obj = data[0];

                                              // Get the error message from the object
                                              var error = obj.Error;
                                              var success = obj.success;

                                              // Check if an error message was returned
                                              if (error) {
                                                // An error message was returned, so display it
                                                $('#response').html(error);
                                                 // Add success CSS to the response division
                                                 $('#response').css({
                                                    'background-color': '#ff4d4d',
                                                    'color' : 'white',
                                                    'font-weight': 'bold'
                                                    });
                                              } else if (success) {
                                                // A success message was returned, so display it
                                                $('#response').html(success);
                                                $('#response').css({
                                                    'background-color': 'green',
                                                    'color' : 'white',
                                                    'font-weight': 'bold'
                                                    });
                                              }

                                          },
                                          error: function(xhr, status, error) {
                                            // Handle error
                                          }
                                        });
                                      }
                                  });
                              
                                </script>


                                <table id="example1" class="display" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>SN</th>
                                    <th>Team Member Name</th>
                                    <th>Role</th>
                                    <th>About</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i =1;
                                 while ($row = $result->fetch_assoc())
                                 {?>
                                        <tr>
                                        <td><?php echo $i ?></td>
                                        <td id="Tablename<?php echo $row['TeamId']; ?>"><?php echo  $row['FullName'] ?></td>
                                        <td id="Tablerole<?php echo $row['TeamId']; ?>"><?php echo  $row['Role'] ?></td>
                                        <td id="Tableabout<?php echo $row['TeamId']; ?>">
                                          <div class="short-content"><?php echo  substr($row['About'], 0, 100) ?>...</div>                                      
                                        </td>
                                        <td id="TeamPhoto<?php echo  $row['Photo']  ?>"> <img src="assets/img/team/<?php echo $row['Photo']; ?>" alt="Photo" class="img-thumbnail" id="updatePhoto<?php echo $row['TeamId']; ?>" style="width:100px;text-align:center; height:auto;"></td>
                                        <td class="mx-auto ml-4">
                                            <button class='btn btn-primary btn-edit mx-auto' data-toggle="modal" data-target="#updateTeamPage<?php echo  $row['TeamId'] ?>" ><i class='fas fa-edit'> </i></button>
                                             <input type="text" name="TeamId" id="Deleteteam<?php echo $row['TeamId']; ?>" value="<?php echo $row['TeamId'] ?>" hidden>
                                            <button class='btn btn-danger btn-delete mx-auto'  id="btn-delete<?php echo $row['TeamId']; ?>"  ><i class='bx bx-trash'></i></button>
                                            <script>
                                              $('#btn-delete<?php echo $row['TeamId']; ?>').on('click', function(){
                                              var TeamId = $('#Deleteteam<?php echo $row['TeamId']; ?>').val();
                                              var confirm = window.confirm("Are you sure you want to delete this record?");
                                              if (confirm) {
                                                $.ajax({
                                                   type: "POST",
                                                   url: "delete.php",
                                                   data: { TeamId: TeamId },
                                                   success: function(response){
                                                      var data = JSON.parse(response);
                                                      alert(data.message);
                                                    }

                                                });
                                              }
                                             });

                                            </script>
                                          </td>
                                        </tr>
                                      
                                        <!-- Modal HTML -->
                                        <div id="updateTeamPage<?php echo  $row['TeamId'] ?>" class="modal fade" >
                                          <div class="modal-dialog modal-lg" >
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Update Team Data</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              </div>
                                              <div class="modal-body" style="border: 2px solid green;">
                                                <form>
                                              
                                                <div class="form-group">
                                                  <div class="row">
                                                  <label for="updatePhoto">Photo</label>
                                                  </div>
                                                    <center><img src="assets/img/team/<?php echo $row['Photo']; ?>" alt="Photo" class="img-thumbnail mb-2" id="PhotoInput<?php echo $row['TeamId']; ?>" style="width: 25%;text-align:center; height:auto;"></center>
                                                    <center><input type="file"  class="form-control-file" id="updatePhotoInput<?php echo $row['TeamId']; ?>" required></center>
                                                </div>
                                                <div class="response my-2 p-2" id="response<?php echo $row['TeamId']; ?>"></div>
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control"  value="<?php echo  $row['FullName']  ?>" id="name<?php echo  $row['TeamId']  ?>" name="name" required rows="7"></input>
                                                  </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                  <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control" name="email" id="email<?php echo  $row['TeamId']  ?>" value="<?php echo  $row['Email']  ?>"aria-describedby="emailHelpId" placeholder="">
                                                    
                                                  </div>
                                                  </div>
                                                  <div class="col-lg-6"> <div class="form-group">
                                                    <label for="">Role</label>
                                                    <input type="text" class="form-control"  value="<?php echo  $row['Role']  ?>" id="role<?php echo  $row['TeamId']  ?>" name="role" ></input>
                                                  </div></div>
                                                  <div class="col-lg-6">
                                                     <div class="form-group">
                                                    <label for="">Phone Number</label>
                                                    <input type="tel" class="form-control"  value="<?php echo  $row['PhoneNumber']  ?>" id="phone<?php echo  $row['TeamId']  ?>" name="phone" required rows="3"></input>
                                                  </div>
                                                  </div>
                                                   <div class="col-lg-6">
                                                   <div class="form-group">
                                                    <label for="">Address</label>
                                                    <input type="tel" class="form-control"  value="<?php echo  $row['Address']  ?>" id="address<?php echo  $row['TeamId']  ?>" name="phone"></input>
                                                  </div>
                                                   </div>
                                                  <!--<div class="col-lg-6">

                                                  </div> -->
                                                </div>
                                                  <div class="form-group">
                                                    <label for="">About</label>
                                                    <textarea class="form-control"  value="<?php echo  $row['About']  ?>" id="about<?php echo $row['TeamId']  ?>" name="about" required rows="4"></textarea>
                                                  </div>
                                                
                                                  <input type="text" class="form-control" value="<?php echo  $row['TeamId']  ?>" id="TeamId<?php echo  $row['TeamId']  ?>" name="Id" required hidden>
                                                
                                                </form>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                    // Get the input elements
                                                    
                                                    var about = document.getElementById('about<?php echo $row['TeamId']  ?>');

                                                    // Set the value of the input elements
                                                    
                                                     about.value = '<?php echo  $row['About']  ?>';
                                                    
                                                    });

                                                </script>
                                                
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="btn-aboutUpdate<?php echo  $row['TeamId'] ?>"> Update</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      
                                        <script>
                                          $('#btn-aboutUpdate<?php echo  $row['TeamId'] ?>').on('click', function() {  
                                            
                                            setTimeout(function() {
                                              $('#response<?php echo $row['TeamId']; ?>').show();
                                              $('#response<?php echo $row['TeamId']; ?>').html('Wait...');
                                            }, 500);

                                            var updatePhoto = $('#updatePhotoInput<?php echo $row['TeamId']; ?>')[0].files[0];
                                            var name = $('#name<?php echo  $row['TeamId']  ?>').val();
                                            var email = $('#email<?php echo  $row['TeamId']  ?>').val();
                                            var role = $('#role<?php echo  $row['TeamId']  ?>').val();
                                            var phone = $('#phone<?php echo  $row['TeamId']  ?>').val();
                                            var about = $('#about<?php echo  $row['TeamId']  ?>').val();
                                            var address = $('#address<?php echo  $row['TeamId']  ?>').val();
                                            var TeamId = $('#TeamId<?php echo  $row['TeamId']  ?>').val();

                                            var formData = new FormData();
                                                formData.append('photo', updatePhoto);
                                                formData.append('name', name);
                                                formData.append('email', email);
                                                formData.append('role', role);
                                                formData.append('phone', phone);
                                                formData.append('about', about);
                                                formData.append('address' , address);
                                                formData.append('TeamId', TeamId);


                                            // Send an AJAX request to the server with the form data
                                            $.ajax({
                                                type: 'POST',
                                                url: 'updateteam.php',
                                                processData: false, // Tell jQuery not to process the data
                                                contentType: false, // Tell jQuery not to set the content type
                                                data: formData,
                                                success: function(response) {
                                                    // Parse the JSON string into an object
                                                    var data = JSON.parse(response);
                                                  
                                                    setTimeout(function() {
                                                      $('#PhotoInput<?php echo $row['TeamId']; ?>').attr('src', 'assets/img/team/' + data.photo);
                                                      $('#updatePhoto<?php echo $row['TeamId']; ?>').attr('src', "assets/img/team/" + data.photo);
                                                      $('#Newimage<?php echo $row['TeamId'] ?>').attr('src', "assets/img/team/" + data.photo);  
                                                    }, 2000); 

                                                    $('#Tablename<?php echo $row['TeamId']; ?>').html(data.name);
                                                    $('#Tablerole<?php echo $row['TeamId']; ?>').html(data.role);
                                                    $('#Tableabout<?php echo $row['TeamId']; ?>').html(data.about);

                                                    $("#about<?php echo  $row['TeamId']  ?>").val(data.about);
                                                    $("#role<?php echo  $row['TeamId']  ?>").val(data.role);
                                                    $("#name<?php echo  $row['TeamId']  ?>").val(data.name);

                                                    $('#introname<?php echo $row['TeamId'] ?>').text(data.name);
                                                    $('#introrole<?php echo $row['TeamId'] ?>').text(data.role);


                                                    // Add a success message to the response dirole
                                                    setTimeout(function() {
                                                        $('#response<?php echo $row['TeamId']; ?>').html('Data Updated Successfully');
                                                    }, 2000);

                                                    // Hide the response dirole after 3 seconds
                                                    setTimeout(function() {
                                                        $('#response<?php echo $row['TeamId']; ?>').hide();
                                                    }, 6000);

                                                    // Add success CSS to the response dirole
                                                    $('#response<?php echo $row['TeamId']; ?>').css({
                                                    'color' : 'green',
                                                    'font-weight': 'bold'
                                                    });
                                              }
                                            });
                                          });
                                       
                                        </script>
                                          <?php $i++;} ?>
                                  </tbody>
                                </table>
                                <script>
                                  $(document).ready(function() {
                                      $('#example1').DataTable();
                                  });
                                </script>
                                  <div class="tab-pane fade show active profile-overview my-3" id="profile-add">
                           
                      </div>
                         
                        </div><!-- End of card-body -->
                        
                        <?php 
                      } else {
                          // Output an error message if the query fails
                          echo "Error: " . $db->error;
                      }
                      // Close the database connection
                      $db->close();
                      ?>
                </div><!-- End Bordered Tabs -->
                
                </div><!-- End of col-xl-12 -->
                
        </section>

</main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Alvicreative</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      
      Designed by <a href="https://alvicreativemarketinghub.com/">Alvicreative</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>