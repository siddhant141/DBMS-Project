<?php
	session_start();
	require("config.php");
	if(!isset($_SESSION['sess_user']))
	{
		Print '<script> alert("Please Login!");</script>';
		Print '<script>window.location.assign("homepage.html");</script>'; 
	}
	else
	{	echo 'Hi';

	}
?>