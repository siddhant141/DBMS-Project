<?php 
  session_start();
  if(isset($_SESSION['sess_user']))
  {
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
      <a class="navbar-brand" id="#Homepage" href="homepage.php">Jurassic World</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">LOGOUT</a></li>
        <li><a href="homepage.php">BACK</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div id="tour" class="bg-1">
    <div class="container">
      <h3 class="text-center">Welcome, <?php Print $_SESSION['sess_user']; ?> </h3>
    </div>
  </div>
  <div  class="container">
    <h3 class="text-center">Your Profile</h3>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-6">
        <p><span class=""></span><b>Username:</b><?php Print $_SESSION['sess_username']; ?></p>
        <p><span class=""></span><b>Name:</b> <?php Print $_SESSION['sess_user']; ?></p>
        <p><span class=""></span><b>Email:</b> <?php Print $_SESSION['sess_email']; ?></p>
        <p><span class=""></span><b>Contact No.:</b> <?php Print $_SESSION['sess_contact']; ?></p>
      </div>
    </div>
  </div>
  <div  class="bg-1">
    <div class="container">
      <h3 class="text-center">Your Tours</h3>
      <ul class="list-group">
      <li class="list-group-item">Tour 1 <span class="badge">Upcoming</span></li>
      <li class="list-group-item">Tour 2 <span class="badge">Past</span></li> 
      <li class="list-group-item">Tour 3 <span class="badge">Past</span></li> 
    </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <br><br>
      <h3 class="text-center">Update Your Profile</h3>
      <form action="updateprofile.php" method="POST">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="row">
            <p>Name:<input class="form-control" id="name" name="name" placeholder="Name" type="text"></p>
            
            <p>Contact No.<input class="form-control" id="contact" name="contact" placeholder="1234567890" type="text"></p>
            <p>New Password:<input class="form-control" id="password" name="pass" placeholder="password" type="password"></p>
            <p>Retype Password:<input class="form-control" id="password" name="cpass" placeholder="password" type="password"></p>
            
          </div>
          <div class="row">
            <div class="col-md-5"></div><div class="col-md-2">
            <button class="btn pull-right" name="submit" type="submit">Update</button>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#Homepage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; 2018 JurassicWorld.com<br>All Rights Preserved</p> 
</footer>
</body>
</html>
<?php
}
else
{
  header("Location: homepage.html");
}
?>