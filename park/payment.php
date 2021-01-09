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
<div id="Contact" class="container">
  <h3 class="text-center">Your Ticket Summary</h3>
  <?php $price='$123';
        echo 'You have to pay '.$price;
        $_SESSION['price']=$price;
  ?>
</div>
<div id="Contact" class="container">
  <h3 class="text-center">We Accept Payment through debit/credit cards</h3>
  <p class="text-center"><em>We love our tourists!</em></p>

  <div class="row">
    
    <form action="paymentcheck.php" method="POST">
      <div class="row">
        <div class="col-md-2">
          
        </div>
        <div class="col-sm-8">
          Card Number: <input class="form-control" id="cno" name="cno" placeholder="Card Number" type="text" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-sm-8">
          Name on Card: <input class="form-control" id="cname" name="cname" placeholder="Name" type="text" required="required">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          CVV: <input class="form-control" id="cvv" name="cvv" placeholder="CVV" type="password" required="required">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-3"></div>
        Expiry:
        
      </div>
      <div class="row">
                  
          <div class="col-sm-3"></div> 
          
          <div class="col-sm-3">
            <input class="form-control" id="month" name="month" placeholder="MM" type="text" required="required">
          </div>
          <div class="col-sm-3">
            <input class="form-control" id="year" name="year" placeholder="YY" type="text" required="required">
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-7 form-group">
          <button class="btn pull-right" name="submit" type="submit">Book Now</button>
        </div>
      </div>
    </form>
  </div>
  <br>
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
