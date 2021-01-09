<?php
	/* For Contact Us */	

	require('config.php');
	if(isset($_POST["submit"]))
	{
		if(!empty($_POST['email']) && !empty($_POST['comments']))
		{
			$email=mysqli_real_escape_string($link,$_POST['email']);
			$name=mysqli_real_escape_string($link,$_POST['name']);
			$comments=mysqli_real_escape_string($link,$_POST['comments']);
			$sql="INSERT INTO enquiry VALUES('$name','$email','$comments')";
			$result=mysqli_query($link,$sql);
			if($result)
			{
				Print '<script>alert("Query successfully posted!");</script>';
                Print '<script>window.location.assign("dashboard.php");</script>';
			}
			else
			{
				Print '<script>alert("We have problem posting query! Try again Later");</script>';
                Print '<script>window.location.assign("dashboard.php");</script>';	
			}

		}
		else
		{
			Print '<script>alert("Please fill the form carefully");</script>';
            Print '<script>window.location.assign("dashboard.php");</script>';
		}
	}
?>