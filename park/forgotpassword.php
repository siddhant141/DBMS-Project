<?php
	require('config.php');
      //use PHPMailer\PHPMailer\PHPMailer;
      //use PHPMailer\PHPMailer\Exception;
      //require('PHPMailer/PHPMailer/src/PHPMailer.php');
      //require('PHPMailer/PHPMailer/src/Exception.php');
      //require('PHPMailer/PHPMailer/src/SMTP.php');
      require 'PHPMailer/PHPMailerAutoload.php';
      require 'PHPMailer/class.phpmailer.php';
      require 'PHPMailer/class.smtp.php';

      $mail= new PHPMailer();
	if(isset($_POST['forgot']))
	{	if(isset($_POST['email']))
		{	$email=mysqli_real_escape_string($link,$_POST['email']);
			$query=mysqli_query($link,"SELECT * FROM login WHERE email='".$email."'");
			$numrows=mysqli_num_rows($query);
			if($numrows!=0)
			{	$r=rand(100000,999999);
				$pass_hash=md5($r);
				$sql="UPDATE login SET password='".$pass_hash."' WHERE email='".$email."'";  
            	$result=mysqli_query($link,$sql);
            	if($result)
            	{     $mail->setFrom('2016ucp1447@mnit.ac.in','Admin',0);
                        $mail->Subject='Your New Password';
                        $mail->isSMTP();
                        $mail->Port = 25;
                        $mail->SMTPAuth = false;
                        $mail->SMTPSecure = false;
            		if(!$mail->addAddress($email))
                        {
                              echo 'Could not add address';
                        }
            		
            		$mail->Body='Hello, Use this password to login and then change your password'.$r;
            		if($mail->send())
            		{
            			Print '<script>alert("Your new password has been sent to your email id")</script>';
            		}
            		else
            		{
            			echo 'Message was not sent.';
                              echo 'Mailer error: ' . $mail->ErrorInfo;	
            		}
            	}
            	else
            	{
            		Print '<script>alert("Failed to recover password1")</script>';
            	}
            }
            else
            {
            	Print '<script>alert("Email ID does not exist")</script>';
            }
       }
    }
?>

		