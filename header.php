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
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/img/Alvi-logo.png" alt="">
      <span class="d-none d-lg-block"><span style="color:rgb(39, 185, 39);font-size:larger">ALVI</span><span style="color:black; font-size: larger;">CREATIVE</span></span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

     

      <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/team/<?php echo $Photo ?> " alt="Profile" class="rounded-circle" id="headerPhoto">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $FullName ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
          <h6><?php echo $FullName ?></h6>
            <span><?php echo $Role ?></span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="index.php">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="index.php">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<?php
        }
      }else{
        echo "Error" .mysqli_error($conn);
      }
?>