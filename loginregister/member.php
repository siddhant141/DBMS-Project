<?php   
 	session_start();
 	if(!isset($_SESSION['sess_user']))
 	{
 		header('location: register1.php');
 	}
 	else
 	{
?>
<h2>Welcome, <?=$_SESSION['sess_user']; ?>! <a href="logout.php">Logout</a></h2>
<?php
	}
?>

