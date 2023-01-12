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
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hero Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('links.php') ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  


  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"> 
  <link href="assets/css/hero.css" rel="stylesheet">
  

</head>

<body>

  <?php include "header.php" ?>

  <?php include "sidebar.php" ?>


  <!-- Main Section -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Homepage Review</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Section</li>
          <li class="breadcrumb-item active">Hero Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
       
        <section class="section profile">
            <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Hero Overview</button>
                    </li>

                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Tabular Representation</button>
                    </li>

                </ul>      
                <!-- Homepage Overview -->
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      <p>The Hero overview page in the admin panel allows the user to view all of the hero content that is currently being displayed on the website. This page provides a summary of each carousel slide, including the background photo, header text, and paragraph of content. The user can quickly scan through all of the slides to get a sense of the overall message and theme of the carousel. This page serves as a useful reference for the user to keep track of the carousel content and make any necessary updates or changes.</p>
                      
                      <?php
                      // Connect to the database
                      $host = "localhost";
                      $user = "root";
                      $password = "";
                      $dbname = "alvicreative";

                      // Create connection
                      $conn = mysqli_connect($host, $user, $password, $dbname);

                      // Check connection
                      if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                      ?>


                  <?php
                    // Connect to the database
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $dbname = "alvicreative";

                    // Create connection
                    $conn = mysqli_connect($host, $user, $password, $dbname);

                    // Check connection
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    ?>


                    <!-- ======= Hero Section ======= -->
                    <section id="hero">
                    <div class="hero-container">
                      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">

                        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                        <div class="carousel-inner" role="listbox">

                          <!-- Slide 1 -->
                          <?php 
                          // Select data from the "hero" table
                          $sql = "SELECT * FROM hero";
                          $result = mysqli_query($conn, $sql);

                          // Echo the selected data
                          if (mysqli_num_rows($result) > 0) {
                            // Output data for each row
                            $i = 0; // Initialize a counter variable
                            while($row = mysqli_fetch_assoc($result)) {
                              // Set the class attribute of the first slide element to "carousel-item active"
                              if ($i == 0) {
                                $class = "carousel-item active";
                              } else {
                                $class = "carousel-item";
                              }
                              $i++; // Increment the counter variable
                        ?>
                        <div class="<?php echo $class; ?>" id="HeroPhoto<?php echo $row['HeroId'] ?>" style="background-image: url('assets/img/slide/<?php echo $row["Photo"] ?>');">
                          <div class="carousel-container">
                            <div class="carousel-content container">
                              <h2 class="animate__animated animate__fadeInDown" id="HeroHeader<?php echo $row['HeroId'] ?>"> <?php echo  $row["Header"] ?> </span></h2>
                              <p class="animate__animated animate__fadeInUp" id="TableParagraphText<?php echo $row['HeroId'] ?>"> <?php echo  $row["ParagraphText"] ?></p>
                              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                          </div>
                        </div>

                        <?php 
                            }
                          }
                        ?>
                        </div>

                        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                        </a>

                      </div>
                    </div>
                   </section><!-- End Hero -->
                     
                    </div>

                    <div class="tab-pane fade pt-3" id="profile-settings">

                    <?php 
                      // Select data from the "hero" table
                      $sql = "SELECT * FROM hero";
                      $result = mysqli_query($conn, $sql);

                      // Echo the selected data
                      if (mysqli_num_rows($result) > 0) { ?>
                       
                  
                        <h5 class="card-title">Carousel Details</h5>
                        <p>This page allows the user to customize the content displayed in the carousel on the website. The user has the option to upload a new background photo for the carousel, update the header text that appears over the photo, and add a paragraph of content to be displayed alongside the photo. These updates will be reflected on the website immediately upon saving the changes. This page provides an easy way for the user to keep the carousel content fresh and relevant to their audience.</p>
                        <script>
                        (function($) {
                          $(document).ready(function() {
                            $('#example1').DataTable({
                            "columns": [
                              { "width": "10%" },
                              { "width": "10%" },
                              { "width": "50%" },
                              { "width": "20%" },
                              { "width": "10%" }
                          ]
                          });
                        });
                        })(jQuery);
                      </script>
                      
                        <table id="example1" class="display" style="width:100%">
                          <thead>
                            <tr>
                              <th scope="col">S/N</th>  
                              <th scope="col">Header</th>
                              <th scope="col">Paragraph Text</th>
                              <th scope="col">Photo</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                             $i = 1;
                            // Output data for each row
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                              <th scope="row"><?php echo $i?></th>
                              <td id="Tableheader<?php echo $row['HeroId']; ?>"><?php echo  $row["Header"] ?></td>
                              <td id="TableParagraphText<?php echo $row['HeroId']; ?>"><?php echo  $row["ParagraphText"] ?>
                             </td>
                              <td id="TablePhoto<?php echo $row['HeroId']; ?>"><img src="assets/img/slide/<?php echo  $row["Photo"] ?>" alt="" style="width:100px;height:80px">
                              </td>
                              <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal<?php echo  $row["HeroId"] ?>"><i class="bx bx-refresh"></i>
                                  </button>
                                <button type="button" class="btn btn-danger" ><i class="bx bx-trash"></i>
                                </button>
                              </td>
                            </tr>  
                          
                            <!-- Modal -->
                            <div class="modal fade" id="updateModal<?php echo $row["HeroId"] ?>" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="updateModalLabel">Update Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <!-- Form to update user information -->
                                    <form>
                                      
                                       <!-- File input to update photo -->
                                      <div class="form-group">
                                        <div class="row">
                                        <label for="updatePhoto">Photo</label>
                                        </div>
                                        <center><img src="assets/img/slide/<?php echo $row['Photo']; ?>" alt="Photo" class="img-thumbnail" id="updatePhoto<?php echo $row['HeroId']; ?>" style="max-height: 30vh;"></center>
                                        <input type="file"  class="form-control-file" id="updatePhotoInput<?php echo $row['HeroId']; ?>">
                                      </div>
                                      <!-- Message Division -->
                                      <div class="response" id="response<?php echo $row['HeroId']; ?>">

                                      </div>
                                      <!-- Text input to update name -->
                                      <div class="form-group">
                                        <label for="updateName">Name</label>
                                        <input type="text" class="form-control" id="updateName<?php echo $row['HeroId']; ?>" value="<?php echo $row['Name']; ?>" placeholder="Enter name" disabled>
                                      </div>
                                      <!-- Text input to update header -->
                                      <div class="form-group">
                                        <label for="updateHeader">Header</label>
                                        <input type="text" class="form-control" id="updateHeader<?php echo $row['HeroId']; ?>" value="<?php echo $row['Header']; ?>" placeholder="Enter header">
                                      </div>
                                      <!-- Textarea to update paragraph text -->
                                      <div class="form-group">
                                        <label for="updateParagraph">Paragraph Text</label>
                                        <textarea class="form-control" id="updateParagraph<?php echo $row['HeroId']; ?>" rows="3"><?php echo $row['ParagraphText']; ?></textarea>
                                      </div>

                                       <!-- Hiiden Field for the Hero Id-->
                                       <input type="text" class="form-control" id="HeroId" value="<?php echo $row['HeroId']; ?>" hidden>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="updateBtn<?php echo $row['HeroId'] ?>">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <script>
                              $(document).ready(function() {
                                // When the update button is clicked
                                $('#updateBtn<?php echo $row['HeroId'] ?>').click(function(e) {
                                  e.preventDefault(); // Prevent form submission
                                 
                                  var updatePhoto = $('#updatePhotoInput<?php echo $row['HeroId']; ?>')[0].files[0];
                                  var updateName = $('#updateName<?php echo $row['HeroId']; ?>').val();
                                  var updateHeader = $('#updateHeader<?php echo $row['HeroId']; ?>').val();
                                  var updateParagraph = $('#updateParagraph<?php echo $row['HeroId']; ?>').val();
                                  var HeroId = $('#HeroId').val();

                                  // Create a FormData object to send the form data with the AJAX request
                                  var formData = new FormData();
                                  formData.append('updatePhoto', updatePhoto);
                                  formData.append('updateName', updateName);
                                  formData.append('updateHeader', updateHeader);
                                  formData.append('updateParagraph', updateParagraph);
                                  formData.append('HeroId', HeroId);

                                  // Send the AJAX request
                                  $.ajax({
                                    url: 'update.php',
                                    type: 'POST',
                                    data: formData,
                                    processData: false, // Tell jQuery not to process the data
                                    contentType: false, // Tell jQuery not to set the content type
                                    success: function(response) {
                                      
                                   // Parse the JSON string into an object
                                    var data = JSON.parse(response);

                                    // Update the form values using the data from the object
                                    $('#updateName<?php echo $row['HeroId']; ?>').val(data.name);
                                    $('#updateHeader<?php echo $row['HeroId']; ?>').val(data.header);
                                    $('#updateParagraph<?php echo $row['HeroId']; ?>').val(data.paragraph);
                                    $('#updatePhoto<?php echo $row['HeroId']; ?>').attr('src', 'assets/img/slide/' + data.photo);                                   
                                    $('#TablePhoto<?php echo $row['HeroId']; ?>').html('<img src="assets/img/slide/' + data.photo + '" alt="" style="width:100px;height:80px">');
                                    $('#Tablename<?php echo $row['HeroId']; ?>').html(data.name);
                                    $('#Tableheader<?php echo $row['HeroId']; ?>').html(data.header);
                                    $('#HeroHeader<?php echo $row['HeroId']; ?>').html(data.header);
                                    $('#TableParagraphText<?php echo $row['HeroId']; ?>').html(data.paragraph);
                                    $('#HeroPhoto<?php echo $row['HeroId']; ?>').css('background-image', 'url("assets/img/slide/' + data.photo + '")');


                                    // Add a success message to the response division
                                      $('#response<?php echo $row['HeroId']; ?>').html('Data has been successfully updated');
                                      $('#response<?php echo $row['HeroId']; ?>').css({
                                      'color': 'green',
                                      'font-weight': 'bold'
                                    });

                                    // Add success CSS to the response division
                                    setTimeout(function() {
                                      $('#response<?php echo $row['HeroId']; ?>').hide();
                                    }, 7000);
                                   
                                    }
                                  });
                                });
                              });

                            </script>

                            <?php 
                               $i++;
                              }
                              } else {
                                echo "No data found";
                              }?>

                          </tbody>
                        </table>
                        <!-- End Bordered Table -->
                        <script>
                          $(document).ready(function() {
                              $('#example1').DataTable();
                          });
                        </script>
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
  
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" 
  integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>