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
      <a class="navbar-brand" href="#Homepage">Jurassic World</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#Homepage">HOME</a></li>
        <li><a href="about.php">ABOUT PARK</a></li>
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="wallpapers/cr4.jpg" alt="Scene" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Picture 4</h3>
          <p>Costa Rican Island</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="wallpapers/w3.jpg" alt="Jurassic Rover" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Jurassic Rover</h3>
          <p>Riding all over the park!</p>
        </div>      
      </div>

      <div class="item">
        <img src="wallpapers/cr1.jpg" alt="Scene" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Picture 1</h3>
          <p>Costa Rican Island</p>
        </div>      
      </div>

      <div class="item">
        <img src="wallpapers/cr2.jpg" alt="Scene" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Picture 2</h3>
          <p>Costa Rican Island</p>
        </div>      
      </div>

      <div class="item">
        <img src="wallpapers/cr3.jpg" alt="Scene" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Picture 3</h3>
          <p>Costa Rican Island</p>
        </div>      
      </div>

      
      <div class="item">
        <img src="wallpapers/shark.jpg" alt="Sharkosaurus" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Sharkosaurus</h3>
          <p>Biggest creature underwater</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">TOUR DATES</h3>
    <p class="text-center"> Ready to shake your soul!! <br> Remember to book your tickets!</p>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Hurry Up!</span></li> 
      <li class="list-group-item">November <span class="badge"></span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wallpapers/cr1.jpg" alt="first" width="400" height="300">
          <p><strong>First Class</strong></p>
          <button class="btn" data-toggle="modal" data-target="#MoreInfo1">More Info.</button>
          <button class="btn" data-toggle="modal" data-target="#BuyTicket1">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wallpapers/w3.jpg" alt="business" width="400" height="300">
          <p><strong>Business Class</strong></p>
          <button class="btn" data-toggle="modal" data-target="#MoreInfo2">More Info.</button>
          <button class="btn" data-toggle="modal" data-target="#BuyTicket2">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="wallpapers/gy.jpg" alt="economy" width="400" height="300">
          <p><strong>Economy Class</strong></p>
          <button class="btn" data-toggle="modal" data-target="#MoreInfo3">More Info.</button>
          <button class="btn" data-toggle="modal" data-target="#BuyTicket3">Buy Tickets</button>
        </div>
      </div>
    </div>
  </div>
  
  
  <!--More Information-->

  <div class="modal fade" id="MoreInfo1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span></span> First Class</h4>
        </div>
        <div class="modal-body">


        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="MoreInfo2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span></span> Business Class</h4>
        </div>
        <div class="modal-body">
          

        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="MoreInfo3" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span></span> Economy Class</h4>
        </div>
        <div class="modal-body">
          

        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

      
  <!-- Tickets -->
  <div class="modal fade" id="BuyTicket1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="authenticate.php" method="POST">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $1000 - Adult | $500 - Child(below 5 yrs)</label>
              <input type="number" class="form-control" id="psw" name="adult" placeholder="How many Adult?">
              <input type="number" class="form-control" id="psw" name="child" placeholder="How many Child?">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="contact"><span class="glyphicon glyphicon-earphone"></span> Contact No.</label>
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact No.">
            </div>
            <div class="form-group">
              <label for="ssn"><span class="glyphicon glyphicon-user"></span> Social Security Number</label>
              <input type="text" class="form-control" id="ssn" name="ssn" placeholder="Enter SSN">
            </div>
            <div class="form-group">
              <label for="date"><span class="glyphicon glyphicon-calendar"></span> Date of Visit</label>
              <input type="date" id="datefield" min="01 /01/2001" class="form-control" name="date" data-date-inline-picker="false" data-date-open-on-focus="true"  />
            </div>
              <button type="submit" class="btn btn-block">Booking Request 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="BuyTicket2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="authenticate.php" method="POST">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $800 - Adult | $400 - Child(below 5 yrs)</label>
              <input type="number" class="form-control" id="psw" name="adult" placeholder="How many Adult?">
              <input type="number" class="form-control" id="psw" name="child" placeholder="How many Child?">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="contact"><span class="glyphicon glyphicon-earphone"></span> Contact No.</label>
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact No.">
            </div>
            <div class="form-group">
              <label for="ssn"><span class="glyphicon glyphicon-user"></span> Social Security Number</label>
              <input type="text" class="form-control" id="ssn" name="ssn" placeholder="Enter SSN">
            </div>
            <div class="form-group">
              <label for="date"><span class="glyphicon glyphicon-calendar"></span> Date of Visit</label>
              <input type="date" id="datefield" min="01/01/2001" class="form-control" name="date" data-date-inline-picker="false" data-date-open-on-focus="true"  />
            </div>
              <button type="submit" class="btn btn-block">Booking Request 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="BuyTicket3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="authenticate.php" method="POST">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $500 - Adult | $250 - Child(below 5 yrs)</label>
              <input type="number" class="form-control" id="psw" name="adult" placeholder="How many Adult?">
              <input type="number" class="form-control" id="psw" name="child" placeholder="How many Child?">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="contact"><span class="glyphicon glyphicon-earphone"></span> Contact No.</label>
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact No.">
            </div>
            <div class="form-group">
              <label for="ssn"><span class="glyphicon glyphicon-user"></span> Social Security Number</label>
              <input type="text" class="form-control" id="ssn" name="ssn" placeholder="Enter SSN">
            </div>
            <div class="form-group">
              <label for="date"><span class="glyphicon glyphicon-calendar"></span> Date of Visit</label>
              <input type="date" id="datefield" min="01/01/2001" class="form-control" name="date" data-date-inline-picker="false" data-date-open-on-focus="true"  />
            </div>
              <button type="submit" class="btn btn-block">Booking Request 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
        </div>
      </div>
    </div>
  </div>



</div>

<!--Login-->
<div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Login</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="signin.php" method="POST">
            <div class="form-group">
              	<label for="username">Your Email or Username</label>
              	<input id="username" class="form-control" name="user" type="text" placeholder="myusername or mymail@mail.com"/>
            </div>
            <div class="form-group">	
            	<label for="password">Your password</label>
            	<input id="password" class="form-control" name="pass" type="password" placeholder="eg. X8df!90EO" />
            </div>
            <input type="submit" name="submit" value="Login" class="btn btn-block" /> 
          </form>
          <br>
          <div class="text-center">Forgot Password?</div>
          <form role="form" action="forgotpassword.php" method="POST">
            <div class="form-group">
                <label for="email">Your Email</label>
                <input id="email" class="form-control" name="email" type="email" placeholder="mymail@mail.com" required="required" />
            </div>
            <input type="submit" name="forgot" value="Send the link to your email" class="btn btn-block" /> 
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          
        </div>
      </div>
  </div>
</div>
    
  
<!--Register-->
<div class="modal fade" id="Register" role="dialog">
    <div class="modal-dialog">
    
	    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Register</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="signup.php" method="POST">
            <div class="form-group">
              	<label for="usernamesignup">Username</label>
              	<input id="user" class="form-control"  autocomplete="off" name="user" type="text" placeholder="john123" />
            </div>
            <div class="form-group">
              	<label for="namesignup">Name</label>
              	<input id="name" class="form-control" name="name" type="text" placeholder="John" />
            </div>
            <div class="form-group">
              	<label for="contact">Contact No.</label>
              	<input id="contact" class="form-control" name="contact" type="text" placeholder="1234567890" />
            </div>
            <div class="form-group">
              	<label for="email">Email</label>
              	<input id="email" class="form-control" name="email" type="text" placeholder="john123@gmail.com" />
            </div>
            <div class="form-group">	
            	<label for="password">Password</label>
            	<input id="password" class="form-control" name="pass" type="password" placeholder="eg. X8df!90EO" />
            </div>
            <div class="form-group">	
            	<label for="password">Confirm Password</label>
            	<input id="password" class="form-control" name="cpass" type="password" placeholder="eg. X8df!90EO" />
            </div>
            
            <input type="submit" name="submit" value="Register" class="btn btn-block" /> 
            
    
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
         
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="Contact" class="container">
  <h3 class="text-center">Contact Us</h3>
  <p class="text-center"><em>We love our tourists!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Any Query? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Isla Nebular, Costa Rica</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: support@jurassicworld.com</p>
    </div>
    <form action="enquiry.php" method="POST">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required="required">
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" name="submit" type="submit">Send</button>
        </div>
      </div>
    </div>
  </form>
  </div>
  <br>
  
  <!--Testimonials section-->
  <!--
  <h3 class="text-center">Testimonials</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
  -->
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
