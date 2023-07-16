<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trip Planning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">  
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">		
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/logo.png" type="image/ico">
  <body>
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" scrset=""></span>&nbsp;&nbsp;Travel Planner</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
	            <li class="nav-item"><a href="item_for_travellers.html" class="nav-link">Item For Travellers</a></li>
	            <li class="nav-item  active"><a href="trips.php" class="nav-link">Trip Planning</a></li>
	        	<li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>
<!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-0 bread">Trip Planning</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>TRIP PLANNING</h2>
          </div>
        </div>
    
        <head>
    <style>
      /* Add some basic styling */
      .planning {
        display: inline-block;
        margin: 10px;
        text-align: center;
      }
       .place-images {
        max-width: 370px;
      } 
    </style>
</head>

<div class="text-center">
<?php
// Connect to your database
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "visitjaybeee";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch places data from the database
$sql = "SELECT * FROM trip ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $tripId = $row['id'];
      $image = $row['image'];
      $package = $row['package'];
      $price = $row['price'];
      $planning = $row['planning'];
      
      echo '
    <div class="planning block-7">
          <div class="image-container">
    <div align="center" >
      
          <img class="place-images" src="images/'.$image.'" ></a>
          <div class="text-center p-4">
          <span class="excerpt d-block">' . $package . '</span>
          <span class="price"><sup>RM</sup> <span class="number">' . $price . '</span> <sub>/per person</sub></span>

              <ul class="pricing-text mb-5">
                  <li><span class="fa fa-check mr-2"></span>Food Recommended</li>
                  <li><span class="fa fa-check mr-2"></span>Recommended Places</li>
              
          <a href="images/'.$planning.'" class="icon image-popup d-flex justify-content-center align-items-center btn btn-primary d-block px-2 py-3">Trip Planning</a>

          </div>
          </div>
          </div>
          
      </div>';
  }
}

$conn->close();
?>

  </section>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Travel Planner</h2>
                <p>"Unlock Your Wanderlust: The Ultimate Travel Planner for Your Dream Adventures"</p>
                <ul class="ftco-footer-social p-0">
      <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
      <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
      <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
    </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Quick Links</h2>
                <ul class="list-unstyled">
      <li><a href="index.html" class="py-2 d-block">Home</a></li>
      <li><a href="destination.html" class="py-2 d-block">Places</a></li>
      <li><a href="item_for_traveller.html" class="py-2 d-block">Item For Travellers</a></li>
      <li><a href="trip.php" class="py-2 d-block">Trip</a></li>
      <li><a href="account.php" class="py-2 d-block">Account</a></li>
    </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <h2 class="footer-heading">Have a Questions?</h2>
                <div class="block-23 mb-3">
      <ul>
        <li><span class="icon fa fa-map"></span><span class="text">Section of Corporate Affairs, Sultan Ibrahim Chancellery Building, Universiti Teknologi Malaysia, 81310 Johor Bahru, Johor, Malaysia.</span></li>
        <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+6 07-553 3333</span></a></li>
        <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">corporate@utm.my</span></a></li>
      </ul>
    </div>
            </div>
        </div>
        <div class="row mt-5">
  <div class="col-md-12 text-center">

    </div>
    </div>
    </div>
</footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
  </body>
</html>