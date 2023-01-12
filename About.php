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
                    $result = $db->query("SELECT * FROM about");

                    // Check if the query was successful
                    if ($result) {
                    
                        while ($row = $result->fetch_assoc()) {?>                  

                    <div class="tab-pane fade show active profile-overview my-3" id="profile-overview">
                      <p>The About us overview page in the admin panel allows the user to view all of the About us content that is currently being displayed on the website. This page provides a summary of each About us slide, including the background photo, About us text, and paragraph of content. The user can quickly scan through all of the slides to get a sense of the overall message and theme of the About us. This page serves as a useful reference for the user to keep track of the About us content and make any necessary updates or changes.</p>

                  
                     <!-- ======= About Us Section ======= -->
                        <section id="about" class="about" style="margin-top: 20px;">
                          <div class="container" data-aos="fade-up">

                            <div class="row no-gutters">
                            <div class="col-lg-6 video-box">
                                <img src="assets/img/<?php echo $row['Photo'] ?>" id="PhotoIntro" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                                <div class="section-title">
                                <h2><?php echo $row['AboutTitle'] ?></h2>
                                <p id="paragraph<?php $row['AboutId'] ?>"><?php echo $row['AboutParagraph'] ?>
                                </p>
                                </div>

                                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bx bx-rocket"></i></div>
                                <h4 class="title"><a href="">MISSION</a></h4>
                                <p class="description" id="mission<?php $row['AboutId'] ?>"> <?php echo $row['Mission'] ?></p>
                                </div>

                                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bx bx-show"></i></div>
                                <h4 class="title"><a href="">VISION</a></h4>
                                <p class="description" id="vision<?php $row['AboutId'] ?>"><?php echo $row['Vision'] ?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section><!-- End About Us Section -->
                    </div>
        
                    <div class="tab-pane fade pt-3" id="profile-settings">
                        <h5 class="card-title">About us Details</h5>
                        <p>This page allows the user to customize the content displayed in the About us and top bar on the website. The user has the option to upload a new background photo for the About us and top bar, update the About us text that appears over the photo, and add a paragraph of content to be displayed alongside the photo. These updates will be reflected on the website immediately upon saving the changes. This page provides an easy way for the user to keep the About us and top bar content fresh and relevant to their audience.</p>

                       
                           <!-- Default Card -->
                        <div class="card">
                            <div class="card-body ">
                              <h5 class="card-title">About Page</h5>

                                <table id="example1" class="display" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>About Paragraph</th>
                                    <th>Mission</th>
                                    <th>Vision</th>
                                    <th>About Photo</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                        <td id="Tableparagraph<?php echo $row['AboutId']; ?>"><?php echo  $row['AboutParagraph']  ?></td>
                                        <td id="Tablemission<?php echo $row['AboutId']; ?>"><?php echo  $row['Mission'] ?></td>
                                        <td id="Tablevision<?php echo $row['AboutId']; ?>"><?php echo  $row['Vision'] ?></td>
                                        <td id="AboutPhoto<?php echo  $row['Photo']  ?>"> <img src="assets/img/<?php echo $row['Photo']; ?>" alt="Photo" class="img-thumbnail" id="updatePhoto<?php echo $row['AboutId']; ?>" style="width:150px;text-align:center; height:auto;"></td>
                                        <td class="mx-auto ml-4">
                                            <button class='btn btn-primary btn-edit mx-auto' data-toggle="modal" data-target="#updateAboutPage<?php echo  $row['AboutId'] ?>" ><i class='fas fa-edit'> Edit</i></button>

                                          </td>
                                        </tr>
                                        <!-- Modal HTML -->
                                        <div id="updateAboutPage<?php echo  $row['AboutId'] ?>" class="modal fade-lg">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Update Topbar Item</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                              
                                                <div class="form-group">
                                                    <label for="updatePhoto">Photo</label>
                                                    <img src="assets/img/<?php echo $row['Photo']; ?>" alt="Photo" class="img-thumbnail mb-2" id="PhotoInput<?php echo $row['AboutId']; ?>" style="width: 95%;text-align:center; height:35vh;">
                                                    <input type="file"  class="form-control-file" id="updatePhotoInput<?php echo $row['AboutId']; ?>" required>
                                                </div>
                                                <div class="response my-2 p-2" id="response<?php echo $row['AboutId']; ?>"></div>
                                                  <div class="form-group">
                                                    <label for="">Paragraph Content</label>
                                                    <textarea class="form-control"  value="<?php echo  $row['AboutParagraph']  ?>" id="paragraph<?php echo  $row['AboutId']  ?>" name="paragraph" required rows="7"></textarea>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                    <label for="">Mission</label>
                                                    <textarea class="form-control"  value="<?php echo  $row['Mission']  ?>" id="mission<?php echo  $row['AboutId']  ?>" name="mission" required rows="4"></textarea>
                                                  </div>

                                                  <div class="form-group">
                                                    <label for="">Vision</label>
                                                    <textarea class="form-control"  value="<?php echo  $row['Vision']  ?>" id="vision<?php echo  $row['AboutId']  ?>" name="vision" required rows="3"></textarea>
                                                  </div>
                                                 
                                                  <input type="text" class="form-control" value="<?php echo  $row['AboutId']  ?>" id="AboutId" name="Id" required hidden>
                                                
                                                </form>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                    // Get the input elements
                                                    
                                                    var paragraph = document.getElementById('paragraph<?php echo  $row['AboutId']  ?>');
                                                    var mission = document.getElementById('mission<?php echo  $row['AboutId']  ?>');
                                                    var vision = document.getElementById('vision<?php echo  $row['AboutId']  ?>');
                                                    var fileInput = document.getElementById('updatePhotoInput<?php echo $row['AboutId']; ?>');

                                                    // Set the value of the input elements
                                                    
                                                    paragraph.value = '<?php echo  $row['AboutParagraph']  ?>';
                                                    mission.value = '<?php echo  $row['Mission']  ?>';
                                                    vision.value = '<?php echo  $row['Vision']  ?>';
                                                    });

                                                </script>
                                                
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="btn-aboutUpdate<?php echo  $row['AboutId'] ?>">Update</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <script>
                                          $('#btn-aboutUpdate<?php echo  $row['AboutId'] ?>').on('click', function() {  
                                            
                                            setTimeout(function() {
                                              $('#response<?php echo $row['AboutId']; ?>').show();
                                              $('#response<?php echo $row['AboutId']; ?>').html('Wait...');
                                            }, 500);

                                            var updatePhoto = $('#updatePhotoInput<?php echo $row['AboutId']; ?>')[0].files[0];
                                            var paragraph = $('#paragraph<?php echo  $row['AboutId']  ?>').val();
                                            var mission = $('#mission<?php echo  $row['AboutId']  ?>').val();
                                            var vision = $('#vision<?php echo  $row['AboutId']  ?>').val();
                                            var aboutId = $('#AboutId').val();

                                            var formData = new FormData();
                                                formData.append('photo', updatePhoto);
                                                formData.append('paragraph', paragraph);
                                                formData.append('mission', mission);
                                                formData.append('vision', vision);
                                                formData.append('aboutId', aboutId);


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
                                                      $('#PhotoInput<?php echo $row['AboutId']; ?>').attr('src', 'assets/img/' + data.photo);
                                                      $('#updatePhoto<?php echo $row['AboutId']; ?>').attr('src', "assets/img/" + data.photo);
                                                      $('#PhotoIntro').attr('src', 'assets/img/' + data.photo);
                                                    }, 2000); 

                                                    $('#Tableparagraph<?php echo $row['AboutId']; ?>').html(data.paragraph);
                                                    $('#Tablemission<?php echo $row['AboutId']; ?>').html(data.mission);
                                                    $('#Tablevision<?php echo $row['AboutId']; ?>').html(data.vision);

                                                    $("#mission<?php echo  $row['AboutId']  ?>").val(data.mission);
                                                    $("#vision<?php echo  $row['AboutId']  ?>").val(data.vision);
                                                    $("#paragraph<?php echo  $row['AboutId']  ?>").val(data.paragraph);

                                                    $('#paragraph<?php $row['AboutId'] ?>').text(data.paragraph);

                                                    $('#mission<?php $row['AboutId'] ?>').text(data.mission);
                                                    $('#vision<?php $row['AboutId'] ?>').text(data.vision);


                                                    // Add a success message to the response division
                                                    setTimeout(function() {
                                                        $('#response<?php echo $row['AboutId']; ?>').html('Data Updated Successfully');
                                                    }, 2000);

                                                    // Hide the response division after 3 seconds
                                                    setTimeout(function() {
                                                        $('#response<?php echo $row['AboutId']; ?>').hide();
                                                    }, 6000);

                                                    // Add success CSS to the response division
                                                    $('#response<?php echo $row['AboutId']; ?>').css({
                                                    'background-color': 'green',
                                                    'color' : 'white',
                                                    'font-weight': 'bold'
                                                    });
                                              }
                                            });
                                          });
                                       
                                        </script>
                                  </tbody>
                                </table>
                                <script>
                                  $(document).ready(function() {
                                      $('#example1').DataTable();
                                  });
                                </script>
                         
                        </div><!-- End of card-body -->


                    <?php }
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