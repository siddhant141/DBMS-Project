<?php
	require 'config.php';
	session_start();
  	if(isset($_SESSION['sess_username']))
  	{	if(isset($_POST['submit']))
  		{	$cno=mysqli_real_escape_string($_POST['cno']);
  			$cname=	mysqli_real_escape_string($_POST['cname']);
  			$cvv=mysqli_real_escape_string($_POST['cvv']);
  			$month=mysqli_real_escape_string($_POST['month']);
  			$year=mysqli_real_escape_string($_POST['year']);
  			$price=mysqli_real_escape_string($_SESSION['price']);
  			$query=mysqli_query("SELECT * FROM cards WHERE cno='".$cno."' and cname='".$cname"' and month='".$month"' and year='".$year"' and balance>='".$price."'");
  			$numrows=mysqli_num_rows($query);
  			if($numrows==0)
  			{
  				Print '<script>alert("Transaction falied!")</script>';
  			}
  			else
  			{	$sql="UPDATE cards SET balance=balance-'".$price."' WHERE cno='".$cno."'";
  				$result=mysqli_query($link,$sql);
  				Print '<script>alert("Transaction was Successful!")</script>';
  				Print '<script>window.location.assign("dashboard.php");</script>';
  			}
  		}
  	}
?>
	