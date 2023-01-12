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
  <link href="assets/css/about.css" rel="stylesheet">
  

</head>

<body>

  <?php include "header.php" ?>

  <?php include "sidebar.php" ?>


  <!-- Main Section -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact Us Review</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item">Homepage</li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
       
        <section class="section profile">
     
            <div class="col-xl-12"> <!-- Start of col-xl-12 -->

            <div class="card">  <!-- Bordered Tabs -->
                <div class="card-body pt-3"> <!-- Start of card-body -->
              
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Contact Us Overview</button>
                    </li>

                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Tabular Representation</button>
                    </li>
                </ul>
               
                 
                <!-- About Us Overview -->
                <div class="tab-content pt-2">                

                    <div class="tab-pane fade show active profile-overview my-3" id="profile-overview">
                      <p>The About us overview page in the admin panel allows the user to view all of the About us content that is currently being displayed on the website. This page provides a summary of each About us slide, including the background photo, About us text, and paragraph of content. The user can quickly scan through all of the slides to get a sense of the overall message and theme of the About us. This page serves as a useful reference for the user to keep track of the About us content and make any necessary updates or changes.</p>

                
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact" style="margin-top: 80px;">
                        <div class="container" data-aos="fade-up">
                  
                          <div class="section-title">
                            <h2>Contact</h2>
                            <p>At Alvicreative, we are always happy to hear from our clients and potential clients. If you have any questions or would like to discuss your marketing needs, please do not hesitate to contact us. You can reach us by phone, email, or by filling out the form below. Our team is always available to answer your questions and help you achieve your goals. We look forward to hearing from you</p>
                          </div>
                  
                          <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-lg-6">
                              <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Winsor House, 1st floor, Nairobi-Kenya</p>
                              </div>
                            </div>
                  
                            <div class="col-lg-3 col-md-6">
                              <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>alvicreativemarketing@gmail.com</p>
                              </div>
                            </div>
                  
                            <div class="col-lg-3 col-md-6">
                              <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+254784012139</p>
                              </div>
                            </div>
                  
                          </div>
                  
                          <div class="row" data-aos="fade-up" data-aos-delay="100">
                  
                            <div class="col-lg-6 ">
                              <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Winsor House Nairobi&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                            </div>
                  
                            <div class="col-lg-6">
                              <form  method="post" role="form" class="php-email-form" id="contact-form">
                                <div class="row">
                                  <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                  </div>
                                  <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                  <textarea class="form-control" name="message" rows="5" placeholder="Message" id="message" required></textarea>
                                </div>

                                <!-- Loader Before the Data is Sent -->
                                  <div id="loader" style="display:none;text-align: center;">
                                    <img src="assets/img/Loader.gif" alt="Loading..." style="width: 20%;">
                                  </div>
                                  
                                  <div id="success-message" style="display:none;">
                                    <div class="alert alert-success" role="alert" style="font-size:14px; text-align: center;">
                                      <strong> Your message has been sent successfully!</strong>
                                    </div>
                                  </div>
                                  <!-- End of Loader -->
                                
                                <div class="text-center"><button type="submit" id="contact-form">Send Message</button></div>
                              </form>
                            </div>
                  
                          </div>
                  
                        </div>
                    </section><!-- End Contact Section -->

                    </div>
        
                    <div class="tab-pane fade pt-3" id="profile-settings">
                        <h5 class="card-title">About us Details</h5>
                        <p>This page allows the user to customize the content displayed in the About us and top bar on the website. The user has the option to upload a new background photo for the About us and top bar, update the About us text that appears over the photo, and add a paragraph of content to be displayed alongside the photo. These updates will be reflected on the website immediately upon saving the changes. This page provides an easy way for the user to keep the About us and top bar content fresh and relevant to their audience.</p>

                       
                           <!-- Default Card -->
                        <div class="card">
                            <div class="card-body ">
                              <h5 class="card-title">Contact Us</h5>
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
                              $result = $db->query("SELECT * FROM contact_details");

                              // Check if the query was successful
                              if ($result) {?>
                    
                                <table id="example1" class="display" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>S/N</th>
                                    <th>Name</th> 
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1; 
                                while ($row = $result->fetch_assoc()) {?>  
                                        <tr>
                                        <td id="Tableid<?php echo $row['id']; ?>"><?php echo  $i  ?></td>
                                        <td id="Tablename<?php echo $row['id']; ?>"><?php echo  $row['name'] ?></td>
                                        <td id="Tablesubject<?php echo $row['id']; ?>"><?php echo  $row['subject'] ?></td>
                                        <td id="Tablemessage<?php echo $row['id']; ?>">
                                          <div class="short-content"><?php echo  substr($row['message'], 0, 100) ?>...</div>                                      
                                        </td>
                                        <td class="mx-auto ml-4">
                                            <button class='btn btn-primary btn-edit mx-auto' data-toggle="modal" data-target="#Reply<?php echo  $row['id'] ?>" ><i class='fas fa-edit'> Reply</i></button>
                                          </td>
                                        </tr>
                                        <!-- Modal HTML -->
                                        <div id="Reply<?php echo  $row['id'] ?>" class="modal fade-lg">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Reply <?php echo $row['name'] ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              </div>
                                              <div class="modal-body">
                                                <h5 class="my-3"><?php echo $row['subject'] ?></h5>
                                                <form>
                                                <div class="response my-2 p-2" id="response<?php echo $row['id']; ?>"></div>
                                                  <div class="form-group">
                                                    <label for="">Reply</label>
                                                    <textarea class="form-control" id="replymessage<?php echo  $row['id']  ?>" name="reply" required rows="7"></textarea>
                                                  </div>
                                                  <input type="text" class="form-control" value="<?php echo  $row['id']  ?>" id="id" name="Id" required hidden>
                                                
                                                </form>
                                                
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="btn-reply<?php echo  $row['id'] ?>">Send Reply</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <script>
                                          $('#btn-reply<?php echo  $row['id'] ?>').on('click', function() {  
                                            
                                            setTimeout(function() {
                                              $('#response<?php echo $row['id']; ?>').show();
                                              $('#response<?php echo $row['id']; ?>').html('Wait...');
                                            }, 500);

                                          
                                            var paragraph = $('#paragraph<?php echo  $row['id']  ?>').val();
                                            var name = $('#name<?php echo  $row['id']  ?>').val();
                                            var email = $('#email<?php echo  $row['id']  ?>').val();
                                            var id = $('#id').val();

                                            var formData = new FormData();
                                                formData.append('photo', updatePhoto);
                                                formData.append('paragraph', paragraph);
                                                formData.append('name', name);
                                                formData.append('email', email);
                                                formData.append('id', id);


                                            // Send an AJAX request to the server with the form data
                                            $.ajax({
                                                type: 'POST',
                                                url: 'updateabout.php',
                                                processData: false, // Tell jQuery not to process the data
                                                contentType: false, // Tell jQuery not to set the content type
                                                data: formData,
                                                success: function(response) {
                                                    // Parse the JSON string into an object
                                                    var data = JSON.parse(response);
                                                  
                                                    setTimeout(function() {
                                                      $('#PhotoInput<?php echo $row['id']; ?>').attr('src', 'assets/img/' + data.photo);
                                                      $('#updatePhoto<?php echo $row['id']; ?>').attr('src', "assets/img/" + data.photo);
                                                      $('#PhotoIntro').attr('src', 'assets/img/' + data.photo);
                                                    }, 2000); 

                                                    $('#Tableparagraph<?php echo $row['id']; ?>').html(data.paragraph);
                                                    $('#Tablename<?php echo $row['id']; ?>').html(data.name);
                                                    $('#Tableemail<?php echo $row['id']; ?>').html(data.email);

                                                    $("#name<?php echo  $row['id']  ?>").val(data.name);
                                                    $("#email<?php echo  $row['id']  ?>").val(data.email);
                                                    $("#paragraph<?php echo  $row['id']  ?>").val(data.paragraph);

                                                    $('#paragraph<?php $row['id'] ?>').text(data.paragraph);

                                                    $('#name<?php $row['id'] ?>').text(data.name);
                                                    $('#email<?php $row['id'] ?>').text(data.email);


                                                    // Add a success message to the response diemail
                                                    setTimeout(function() {
                                                        $('#response<?php echo $row['id']; ?>').html('Data Updated Successfully');
                                                    }, 2000);

                                                    // Hide the response diemail after 3 seconds
                                                    setTimeout(function() {
                                                        $('#response<?php echo $row['id']; ?>').hide();
                                                    }, 6000);

                                                    // Add success CSS to the response diemail
                                                    $('#response<?php echo $row['id']; ?>').css({
                                                    'background-color': 'green',
                                                    'color' : 'white',
                                                    'font-weight': 'bold'
                                                    });
                                              }
                                            });
                                          });
                                       
                                        </script>
                                  </tbody>
                                  <?php  $i++; }
                                 ?>
                                </table>
                                <script>
                                  $(document).ready(function() {
                                      $('#example1').DataTable();
                                  });
                                </script>
                         
                        </div><!-- End of card-body -->


                
                      <?php } else {
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