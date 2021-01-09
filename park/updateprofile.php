<?php
	require('config.php');
	session_start();
	if(isset($_SESSION['sess_username']))
	{	$user=$_SESSION['sess_username'];
		if(isset($_POST['submit']))
		{	$name=$_SESSION['sess_user'];
			$contact=$_SESSION['sess_contact'];
			if(isset($_POST['name']))
			{
				$name=mysqli_real_escape_string($link,$_POST['name']);

			}
			if(isset($_POST['contact']))
			{
				$contact=mysqli_real_escape_string($link,$_POST['contact']);

			}
			$sql="UPDATE login SET name='".$name."', contact='".$contact."' WHERE username='".$user."'";
			$result=mysqli_query($link,$sql); 
            if(isset($_POST['pass']) && isset($_POST['cpass']))
			{
				$pass=mysqli_real_escape_string($link,$_POST['pass']);
				$cpass=mysqli_real_escape_string($link,$_POST['cpass']);
				if($pass==$cpass)
				{
					$pass_hash=md5($pass);
					$sql="UPDATE login SET password='".$pass_hash."' WHERE username='".$user."'";  
            		$result=mysqli_query($link,$sql);
            		if(!$result)
            		{	Print '<script>alert("Could not update now. Please logout and register again")</script>';
            		}
            		else
            		{	$query=mysqli_query($link,"SELECT * FROM login WHERE username='".$user."'");  
                		$numrows1=mysqli_num_rows($query);  
                		if($numrows1!=0)  
                		{   while($row=mysqli_fetch_assoc($query))  
                    		{   $dbemail=$row['email'];  
                        		$dbpassword=$row['password'];
		                        $dbusername=$row['username'];
		                        $dbname=$row['name'];
		                        $dbcontact=$row['contact'];  
		                    }  
		                    if($user==$dbusername)  
		                    {     
		                        $_SESSION['sess_user']=$dbname;  //Name of the user as the name of the session
		                        $_SESSION['sess_email']=$dbemail;
		                        $_SESSION['sess_username']=$dbusername;      
		                        $_SESSION['sess_contact']=$dbcontact;
		                        /* Redirect browser */  
		                        header("Location: dashboard.php");  //directs to dashboard
		                    }
		                }
            			Print '<script>alert("Profile Successfully Updated")</script>';	
            			Print '<script>window.location.assign("dashboard.php");</script>';
            		}		
				}
				else
				{
					Print '<script>alert("Password could not be updated.Please make sure it match with retype passoword")</script>';
					//Print '<script>window.location.assign("dashboard.php");</script>';
				}

			}

		}
	}
?>