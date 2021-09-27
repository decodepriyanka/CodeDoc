<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KnockDoc</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/cjs/popper-base.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    



</head>
<body>
  <!-- Navbaar -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="#"><h2>KnockDoc</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown">For User</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="indexdoc.php">For Doctor</a>
            <a class="dropdown-item" href="indexhos.php">For Hospital</a>
          </div>
        </li>
        &nbsp;&nbsp;<li class="nav-item"><a class="btn btn-outline-success" href="patients/login.php">Login/Signup</a></li>
    </div>
  </nav>
  <!-- Navbaar Ends Author Gaurav Kumar Mishra --><br>


<!-- location search-->
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-sm-4 col-md-4 form-control"><input type="search" placeholder="Location" name="" id="loc" style="outline:none;border: none;"></div>
    <div class="col-lg-7 col-sm-7 col-md-7 form-control"><input type="search" name="" style="outline:none;border: none;"><i class="fa fa-search float-right py-2"></i></div>
  </div>
</div>
<div id="map"></div>
<!-- End Location --><br>
<!-- Our Services -->
<div class="container-fluid bg-primary"> 
  <div class="p-5">
    <h4 class="text-light">How KnockDoc is helping in fighting COVID-19</h4>
  </div>
  <div class="row">
    <div class="col-4">
      <a href="">
        <div class="px-5">
          <img src="imgs/img1.png" class="img-fluid card-img">
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="">
        <div class="px-5">
          <img src="imgs/img2.png" class="img-fluid card-img">
        </div>
      </a>
    </div>
    <div class="col-4">
      <a href="patient/login.php">
        <div class="px-5">
          <img src="imgs/img3.png" class="img-fluid card-img">
        </div>
      </a>
    </div>
  </div>
</div>
<!-- End -->
<!-- Why Us -->
<div><br><br>
  <div class="text-center"><h2><strong>Why Us!!</strong></h2></div>
  <div class="slider">
    <div class="slides">
      <div id="s1" class="slide text-center p-4"><h4>We are a bridge<br> between Hospitals or Doctors and Patients.</h4></div>
      <p id="s2" class="slide hide">Online repository for safeguarding your reports for instant showing.</p>
      <p id="s3" class="slide hide">Quick assistance in any need whether site related technical issues or facility relatad</p>
    </div>
  </div>
</div>
<!-- End -->
<!-- Footer -->
<footer>
  <div class="bg-dark text-white">
    <div class="container py-3">
      <div class="row">
        <div class="col-lg-3">
          <h4>About Us</h4>
          <p> KnockDoc an online website where a person can find a doctor nearby and also check the availability anytime anywhere with less efforts.While finding a doctor one can maintain its clinical data in our database provided to each patient and update to get help in any emergency cases. </p>
        </div>
        <div class="col-lg-3">
          <h4>Usefull Links</h4>
          <h5>Patients</h5>
          <ul class="list-unstyled">
            <li><a class="text-light" href="">Home</a></li>
            <li><a class="text-light" href="">About</a></li>
            <li><a class="text-light" href="">Services</a></li>
            <li><a class="text-light" href="">Help</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4>Contact Us</h4>
          <address>Dummy Address</address>
          <strong>Phone:</strong> +91 1234567890
          <strong>Email: </strong><a class="text-light" href="mailto:mail@test.com">mail@test.com</a>
        </div>
        <div class="col-lg-3">
          <h4>Newsletters</h4>
          <p>Enter your email below</p>
          <form action="">
            <div class="input-group">
              <input type="email" name="" id="" class="form-control">
              <div class="input-group-append">
                <button class="btn btn-secondary">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
        <div class="container-fluid text-center bg-secondary py-2">
          &copy; 2020. All rights are reserved.
        </div>
  </div>
</footer>

  <!-- Scripts -->
    <!-- slide show -->
<script type="text/javascript">

</script>
    <!-- end -->
  <!--End Scripts -->
</body>
</html>