<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Dashboard</title>
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
      <a class="navbar-brand" href="#Homepage">Jurassic World</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#Homepage">HOME</a></li>
        <li><a href="#about">ABOUT PARK</a></li>
        <li><a href="#tour">HOLIDAY TOUR</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#Contact">CONTACT US</a></li>
            <li><a href="#">TRAVEL INFORMATION</a></li>
            <li><a href="#">GALLERY</a></li> 
          </ul>
        </li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
      </ul>
    </div>
  </div>
</nav>
<?php   
 	session_start();
 	if(!isset($_SESSION['sess_user']))
 	{
 		header('location: register1.php#tologin');
 	}
 	else
 	{
?>
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Welcome, <?=$_SESSION['sess_user']; ?>!</h3>
  </div>
 </div>
<?php
	}
?>

</body>
</html>



