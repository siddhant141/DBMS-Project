<?php
  /* For Dashboard */

  require("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jurassic World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/homepagecss.css">
  <!-- Map Plugins-->
  <!--Image Viwer-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
  <script type="text/javascript" src="libs/jquery-ui.js"></script>
  <script type="text/javascript" src="src/imgViewer.js"></script>
  
  <!--Mousewheel-->
  <script type="text/javascript" src="libs/jquery.mousewheel.min.js"></script>
  <script src="jquery.fs.zoetrope.min.js"></script>
  <script src="hammer.min.js"></script>
  <script src="jquery.hammer.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="Homepage" data-spy="scroll" data-target=".navbar" data-offset="50">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">       <!--Mobile Menu Button-->
        <span class="icon-bar"></span>              
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepage.php">Jurassic World</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tour">HOLIDAY TOUR</a></li>
        <li><a href="dinosaurs.html">DINOSAURS</a></li>
        <?php
          session_start();
          if(!isset($_SESSION['sess_user']))
          { 
        ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SIGN IN/UP</a>
          <ul class="dropdown-menu">
            
          <li><a href="#Register" data-toggle="modal" data-target="#Register">CREATE ACCOUNT</a></li> 
            <li><a href="#Login" data-toggle="modal" data-target="#Login">LOGIN</a></li>
          </ul>
        </li>
        <?php
          }
          else
          {
        ?>
          <li><a href="dashboard.php"><?php Print $_SESSION['sess_user'];?></a></li>
          <?php
        }
        ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#Contact">CONTACT US</a></li>
            <li><a href="travelinfo.php">TRAVEL INFORMATION</a></li>
            <li><a href="#">GALLERY</a></li> 
          </ul>
        </li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
      </ul>
    </div>
  </div>
</nav>


<!-- Container (How to get there Section) -->
<div id="how" class="bg-1">
  <div class="container">
    <h3><span class="glyphicon glyphicon-globe"> How To Reach Island?</span></h3>
    <div class="row">
    <div class="col-sm-5">
      <ul class="list-group">
      <li class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"> Land to San Jose International Airport </span></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <!--div class="thumbnail"-->
        <img src="images/crmap.gif" alt="map" width="280" height="180"> 
      <!--/div-->
    </div>  
  </div>
  <br>
  <div class="row">
    <div class="col-sm-5">
      <ul class="list-group">
      <li class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"> Take Jurassic World ferry from San Jose Port to Isla Nublar Island </span></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <!--div class="thumbnail"-->
        <img src="images/boat.jpg" alt="ferry" width="280" height="180"> 
      <!--/div-->
    </div>
    <div class="col-sm-3">
      <!--div class="thumbnail"-->
        <img src="images/boat2.jpg" alt="ferry" width="280" height="180"> 
      <!--/div-->
    </div>
  </div>
</div>
<!-- Add Google Maps -->
<div id="googleMap">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/jquery-mousewheel@3.1.13"></script>
    <script type="text/javascript" src="lib/hammer.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/hammerjs@2.0.8"></script>
    <script type="text/javascript" src="https://unpkg.com/jquery-hammerjs@2.0.0"></script>
    <script type="text/javascript" src="lib/imgViewer.js"></script>
    <h3 class="text-center" align="center">ISLA NEBULAR ISLAND</h3>
    <div align="center">
      <img  id="map" src="aboutpics/map.jpg" width="80%" align="center" />
    </div>
    <script type="text/javascript">
      ;(function($) {
                $(window).on("load", function() {
                    $(document).ready( function() {
                        var $img = $("#map").imgViewer();
                    });
                });
      })(jQuery);
    </script>
<!--<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
*/
-->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#Homepage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; 2018 JurassicWorld.com<br>All Rights Preserved</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#Homepage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>


</body>
</html>