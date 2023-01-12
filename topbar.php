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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" 
  integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/header.css" rel="stylesheet">
  

</head>

<body>

  <?php include "header.php" ?>

  <?php include "sidebar.php" ?>


  <!-- Main Section -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Top Bar Review</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item">Homepage</li>
          <li class="breadcrumb-item active">Top bar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
       
        <section class="section profile">
        <div class="row">


            </div>

            <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Top Bar Overview</button>
                    </li>

                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Tabular Representation</button>
                    </li>
                </ul>
               
                 
                <!-- Homepage Overview -->
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview my-3" id="profile-overview">
                      <p>The header overview page in the admin panel allows the user to view all of the header content that is currently being displayed on the website. This page provides a summary of each header slide, including the background photo, header text, and paragraph of content. The user can quickly scan through all of the slides to get a sense of the overall message and theme of the header. This page serves as a useful reference for the user to keep track of the header content and make any necessary updates or changes.</p>

                  
                      <!-- ======= Top Bar ======= -->
                    <div id="topbar" class="d-flex align-items-center">
                        <div class="container">
                            <div class="contact-info">
                            <i class="bi bi-envelope"></i> <a href="mailto:alvicreativemarketing@gmail.com">Alvicreative</a>
                            <i class="bi bi-phone"></i> <a href="tel:=254784012139"> +257 84012139</a>
                            </div>
                        </div>
                        </div>
                    

                    <!-- ======= Header ======= -->
                    <header id="header" >
                        <div class="container d-flex align-items-center">

                        <h2 class="logo me-auto d-lg-inlie d-md-inline d-sm-none d-none"><a href="index.html"><span>ALVI</span>CREATIVE</a></h2>
                    
                        <a href="index.html" class="logo me-auto me-lg-0 d-lg-none d-md-none d-sm-inline d-inline"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

                        <nav id="navbar" class="navbar order-last order-lg-0">
                            <ul>
                            <li><a href="#hero" class="active">Home</a></li>
                            <li><a href="about.html">About</a></li></li>

                            <li class="dropdown"><a href="services.html"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                <li><a href="websitedevelopment.html">Website Development</a></li>
                                <li><a href="socialmediamanagement.html">Social Media Management</a></li>
                                <li><a href="VideoCreation.html">Video Creation and Editing</a></li>
                                <li><a href="eventMarketing.html">Event Marketing</a></li>
                                <li><a href="searchEngineOptimization.html">Search Engine Optimization</a></li>
                                <li><a href="eCommerceSolutions.html">E-Commerce Solutions</a></li>
                                <li><a href="photography.html">Photography</a></li>
                                <li><a href="contentWriting.html">Content Writing</a></li>
                                <li><a href="training.html">Training</a></li>
                                <li><a href="googleAds.html">Google Ads and Youtube Ads</a></li>
                                <li><a href="branding.html">Branding and Advertising</a></li>
                                <li><a href="marketingCampaigns.html">Marketing Campaigns</a></li>
                                <li><a href="onlineReputation.html">Online Reputation</a></li>
                                <li><a href="businessManagement.html">Business Management and Software Development</a></li>
                                </ul>
                            </li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="clients.html">Clients</a></li>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        </nav><!-- .navbar --> 

                        <div class="header-social-links d-flex">
                            <a href="https://twitter.com/alvicreativema3/" target="_blank" class="twitter"><i class="bu bi-twitter"></i></a>
                            <a href="https://facebook.com/alvicreativ/" target="_blank" class="facebook"><i class="bu bi-facebook"></i></a>
                            <a href="https://api.whatsapp.com/send/?phone=%2B254784012139&text&type=phone_number&app_absent=0" class="whatsapp" target="_blank"><i class="bu bi-whatsapp"></i></a>
                            <a href="https://www.instagram.com/alvicreativemarketinghub/" target="_blank" class="instagram"><i class="bu bi-instagram"></i></i></a>
                            <a href="https://www.linkedin.com/alvicreativemaketinghub.co.ke/" class="linkedin" target="_blank"><i class="bu bi-linkedin"></i></i></a>
                        </div>

                        </div>
                    </header><!-- End Header -->
                    </div>
        

                    <div class="tab-pane fade pt-3" id="profile-settings">
                        <h5 class="card-title">Header Details</h5>
                        <p>This page allows the user to customize the content displayed in the header and top bar on the website. The user has the option to upload a new background photo for the header and top bar, update the header text that appears over the photo, and add a paragraph of content to be displayed alongside the photo. These updates will be reflected on the website immediately upon saving the changes. This page provides an easy way for the user to keep the header and top bar content fresh and relevant to their audience.</p>

                       
                           <!-- Default Card -->
                          <div class="card">
                            <div class="card-body ">
                              <h5 class="card-title">Top Bar</h5>
                                  <?php
                                    error_reporting(E_ALL);
                                    ini_set('display_errors', 1);
                                    // Connect to the database
                                    $db = new mysqli("localhost", "root", "", "alvicreative");

                                    // Check for errors
                                    if ($db->connect_error) {
                                      die("Connection failed: " . $db->connect_error);
                                    }

                                    // Select all rows from the topbar table
                                    $result = $db->query("SELECT * FROM topbar");

                                    // Check if the query was successful
                                    if ($result) {?>

                                <table id="example1" class="display" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>TopBarId</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                      <?php
                                      while ($row = $result->fetch_assoc()) {
                                      ?>
                                        <tr>
                                            <td><?php echo  $row['TopBarId'] ?></td>
                                            <td id="tablename<?php echo  $row['TopBarId']  ?>"><?php echo  $row['Name']  ?></td>
                                            <td id="tablelink<?php echo  $row['TopBarId']  ?>"><?php echo  $row['Link'] ?></td>
                                            <td>
                                                <button class='btn btn-primary btn-edit' data-toggle="modal" data-target="#updateModalTopbar<?php echo  $row['TopBarId'] ?>"><i class='fas fa-edit'></i></button>
                                                <button class='btn btn-danger btn-delete'><i class='fas fa-trash-alt'></i></button>
                                          </td>
                                        </tr>
                                        <!-- Modal HTML -->
                                        <div id="updateModalTopbar<?php echo  $row['TopBarId'] ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Update Topbar Item</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="response" id="response<?php echo  $row['TopBarId']  ?>">

                                                </div>
                                                <form>
                                                  <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" value="<?php echo  $row['Name']  ?>" id="name<?php echo  $row['TopBarId']  ?>" name="name" required>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="link">Link</label>
                                                    <input type="text" class="form-control" value="<?php echo  $row['Link']  ?>" id="link<?php echo  $row['TopBarId']  ?>" name="link" required>
                                                  </div>
                                                 
                                                  <input type="text" class="form-control" value="<?php echo  $row['TopBarId']  ?>" id="topbarId<?php echo  $row['TopBarId']  ?>" name="link" required hidden>
                                                
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="btn-topBarupdate<?php echo  $row['TopBarId'] ?>">Update</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <script>
                                          $('#btn-topBarupdate<?php echo  $row['TopBarId'] ?>').on('click', function() {
                                             // Show the loading spinner
                                              $('#response').html('<div class="spinner-border text-white" role="status"><span class="sr-only">Loading...</span></div>');
                                                                                        
                                            // Get the form data
                                            var name = $('#name<?php echo  $row['TopBarId']  ?>').val();
                                            var link = $('#link<?php echo  $row['TopBarId']  ?>').val();                                         
                                            var topBarId = $('#topbarId<?php echo  $row['TopBarId']  ?>').val();
                                           
                                            // Send an AJAX request to update the record
                                            $.ajax({
                                              url: 'updateTopBar.php',
                                              type: 'POST',
                                              data: {
                                                name: name,
                                                link: link,
                                                topBarId: topBarId
                                              },
                                              success: function(response) {
                                                var data = JSON.parse(response);

                                                // Update the values in the table
                                                $('#tablename<?php echo  $row['TopBarId']  ?>').html(data.name);
                                                $('#tablelink<?php echo  $row['TopBarId']  ?>').html(data.link);

                                                // Update the values in the modal
                                                $('#name<?php echo  $row['TopBarId']  ?>').val(data.name);
                                                $('#link<?php echo  $row['TopBarId']  ?>').val(data.link);
                                                $('#topBarId<?php echo  $row['TopBarId']  ?>').val(data.topBarId);
                                                
                                                // Hide the modal
                                                $('#updateModal').modal('hide');

                                                // Show the success message
                                                $('#response<?php echo  $row['TopBarId']  ?>').html('<div class="bg-success text-white p-2">Data updated successfully</div>');
                                              }
                                            });
                                          });

                                        </script>

                                      <?php }
                                    } else {
                                      // Output an error message if the query fails
                                      echo "Error: " . $db->error;
                                    }
                                    // Close the database connection
                                    $db->close();
                                    ?>
                                  </tbody>
                                </table>
                                <script>
                                  $(document).ready(function() {
                                      $('#example1').DataTable();
                                  });
                                </script>
                                
                            </div>
                          </div>

                          <!-- Default Card -->
                          <div class="card">
                            <div class="card-body ">
                              <h5 class="card-title">Header Bar</h5>
                                <?php
                                  error_reporting(E_ALL);
                                  ini_set('display_errors', 1);
                                  // Connect to the database
                                  $db = new mysqli("localhost", "root", "", "alvicreative");

                                  // Check for errors
                                  if ($db->connect_error) {
                                    die("Connection failed: " . $db->connect_error);
                                  }

                                  // Select all rows from the topbar table
                                  $result = $db->query("SELECT * FROM header");

                                  // Check if the query was successful
                                  if ($result) {?>

                              <table id="example2" class="display" style="width:100%">
                              <thead>
                                <tr>
                                  <th>HeaderId</th>
                                  <th>Name</th>
                                  <th>Link</th>
                                  <th>Action</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                    <?php
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                      <tr>
                                          <td><?php echo  $row['HeaderId'] ?></td>
                                          <td id="tableheadername<?php echo  $row['HeaderId']  ?>"><?php echo  $row['Name']  ?></td>
                                          <td id="tableheader<?php echo  $row['HeaderId']  ?>"><?php echo  $row['Link'] ?></td>
                                          <td>
                                            <button class='btn btn-primary btn-edit' data-toggle="modal" data-target="#updateModalHeader<?php echo  $row['HeaderId'] ?>"><i class='fas fa-edit'></i></button>
                                            <button class='btn btn-danger btn-delete'><i class='fas fa-trash-alt'></i></button>
                                          </td>
                                      </tr>
                                       <!-- Modal HTML -->
                                       <div id="updateModalHeader<?php echo  $row['HeaderId'] ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Update Header Item</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="response" id="Headerresponse<?php echo  $row['HeaderId']  ?>"></div>
                                                  <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" value="<?php echo  $row['Name']  ?>" id="Headername<?php echo  $row['HeaderId']  ?>" name="name" required>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="link">Link</label>
                                                    <input type="text" class="form-control" value="<?php echo  $row['Link']  ?>" id="header<?php echo  $row['HeaderId']  ?>" name="link" required>
                                                  </div>
                                                  <input type="text" class="form-control" value="<?php echo  $row['HeaderId']  ?>" id="headerId<?php echo  $row['HeaderId']  ?>" name="headerId" required hidden>
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="btn-HeaderUpdate<?php echo  $row['HeaderId'] ?>">Update</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <script>
                                          $('#btn-HeaderUpdate<?php echo  $row['HeaderId'] ?>').on('click', function() {
                                             // Show the loading spinner
                                              $('#Headerresponse<?php echo  $row['HeaderId']  ?>').html('<div class="spinner-border text-white" role="status"><span class="sr-only">Loading...</span></div>');
                                                                                        
                                            // Get the form data
                                            var name = $('#Headername<?php echo  $row['HeaderId']  ?>').val();
                                            var link = $('#header<?php echo  $row['HeaderId']  ?>').val();                                         
                                            var headerId = $('#headerId<?php echo  $row['HeaderId']  ?>').val();
                                           
                                            // Send an AJAX request to update the record
                                            $.ajax({
                                              url: 'updateHeaderBar.php',
                                              type: 'POST',
                                              data: {
                                                name: name,
                                                link: link,
                                                headerId: headerId
                                              },
                                              success: function(response) {
                                                var data = JSON.parse(response);
                                               prev_name= '<?php echo  $row['Name']  ?>';
                                               prev_link= '<?php echo  $row['Link']  ?>';
                                                console.log(data.name);
                                                if(prev_name == data.name && prev_link == data.link){
                                                      // Show the fail message
                                                      $('#Headerresponse<?php echo  $row['HeaderId']  ?>').html('<div class="bg-secondary text-white p-2">No changes made</div>');
                                                }
                                                else{
                                                    // Update the values in the table
                                                    $('#tableheadername<?php echo  $row['HeaderId']  ?>').html(data.name);
                                                    $('#tableheader<?php echo  $row['HeaderId']  ?>').html(data.link);

                                                    // Update the values in the modal
                                                    $('#Headername<?php echo  $row['HeaderId']  ?>').val(data.name);
                                                    $('#header<?php echo  $row['HeaderId']  ?>').val(data.link);
                                                    $('#headerId<?php echo  $row['HeaderId']  ?>').val(data.headerId);
                                                    
                                                    // Hide the modal
                                                    $('#updateModalHeader<?php echo  $row['HeaderId'] ?>').modal('hide');
                                                     // Show the fail message
                                                     $('#Headerresponse<?php echo  $row['HeaderId']  ?>').html('<div class="bg-success text-white p-2">Data Updated Successfully</div>');
                                                }
                                              }
                                            });
                                          });

                                        </script>

                                    <?php }
                                  } else {
                                    // Output an error message if the query fails
                                    echo "Error: " . $db->error;
                                  }
                                  // Close the database connection
                                  $db->close();
                                  ?>
                                </tbody>
                              </table>
                              <script>
                                $(document).ready(function() {
                                    $('#example2').DataTable()
                                  });
                              </script>
                            </div>
                          </div>
                       
                    </div>

                
                </div><!-- End Bordered Tabs -->
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
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
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