<?php
    if(isset($_POST["submit"]))
        {  
            if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['cpass']) && !empty($_POST['email']) && !empty($_POST['name'])) 
            {   $email=$_POST['email'];
                $cpass=$_POST['cpass'];
                $user=$_POST['user'];  
                $pass=$_POST['pass'];
                $name=$_POST['name'];
                $contact=$_POST['contact'];
                if($pass==$cpass)
                {   $pass_hash=md5($pass);
                    $con=mysqli_connect('localhost','root','','user') or die(mysqli_error());  
              
                    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
                    $numrows=mysqli_num_rows($query);  
                    if($numrows==0)  
                    {   $query=mysqli_query($con,"SELECT * FROM login WHERE email='".$email."'");
                        $numrows1=mysqli_num_rows($query);
                        if($numrows1==0)
                        {   $sql="INSERT INTO login VALUES('$user','$name','$contact','$email','$pass_hash')";  
                            $result=mysqli_query($con,$sql);  
                            if($result)
                            {  
                                echo "Account Successfully Created";  
                            } 
                            else 
                            {  
                                echo "Failure!";  
                            }
                        }
                        else
                        {
                            echo "Email already used! Please try again with another.";
                        }  
              
                    }
                    else 
                    {  
                        echo "That username already exists! Please try again with another.";  
                    }
                } 
                else
                {
                    echo "Password doesn't match with Confirm Password";
                }  
              
            } 
            else 
            {  
                echo "All fields are required!";  
            }  
        }  
?>