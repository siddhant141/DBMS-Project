<?php
    /*For Create Account*/

    require('config.php');
    if(isset($_POST["submit"]))
        {  
            if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['cpass']) && !empty($_POST['email']) && !empty($_POST['name'])) 
            {   $email=mysqli_real_escape_string($link,$_POST['email']);
                $cpass=mysqli_real_escape_string($link,$_POST['cpass']);
                $user=mysqli_real_escape_string($link,$_POST['user']);  
                $pass=mysqli_real_escape_string($link,$_POST['pass']);
                $name=mysqli_real_escape_string($link,$_POST['name']);
                $contact=mysqli_real_escape_string($link,$_POST['contact']);
                if($pass==$cpass)
                {   $pass_hash=md5($pass);
               		$query=mysqli_query($link,"SELECT * FROM login WHERE username='".$user."'");  
                    $numrows=mysqli_num_rows($query);  
                    if($numrows==0)  
                    {   $query=mysqli_query($link,"SELECT * FROM login WHERE email='".$email."'");
                        $numrows1=mysqli_num_rows($query);
                        if($numrows1==0)
                        {   $sql="INSERT INTO login VALUES('$user','$name','$contact','$email','$pass_hash')";  
                            $result=mysqli_query($link,$sql);  
                            if($result)
                            {  
                                //echo "Account Successfully Created";

                            	Print '<script>alert("Account Successfully Created");</script>';
                            	Print '<script>window.location.assign("homepage.html");</script>';  
                            } 
                            else 
                            {  	Print '<script>alert("Sorry we cannot add you now! Try again later");</script>';
                            	Print '<script>window.location.assign("homepage.html");</script>';
                                //echo "Sorry we cannot add you now! Try again later";  
                            }
                        }
                        else
                        {
                            Print '<script>alert("Email already used! Please try again with another.");</script>';
                            Print '<script>window.location.assign("homepage.html");</script>';
                        }  
              
                    }
                    else 
                    {  	Print '<script>alert("That username already exists! Please try again with another.");</script>';
                       	Print '<script>window.location.assign("homepage.html");</script>';
                       // echo "That username already exists! Please try again with another.";  
                    }
                } 
                else
                {	Print '<script>alert("Password doesn\'t match with Confirm Password");</script>';
                    Print '<script>window.location.assign("homepage.html");</script>';
                    //echo "Password doesn't match with Confirm Password";
                }  
              
            } 
            else 
            {  	Print '<script>alert("All fields are required!");</script>';
                Print '<script>window.location.assign("homepage.html");</script>';
                //echo "All fields are required!";  
            }  
        }  
?>