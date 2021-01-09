<?php  
    /* For Login */

    require('config.php');
    session_start();
    if(isset($_POST["submit"]))
    {   if(!empty($_POST['user']) && !empty($_POST['pass'])) 
        {  
            $user=mysqli_real_escape_string($link,$_POST['user']);  
            $pass=mysqli_real_escape_string($link,$_POST['pass']);
            $email=mysqli_real_escape_string($link,$_POST['user']);
            $pass_hash=md5($pass);     
            $query=mysqli_query($link,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass_hash."'");  
            $numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {   while($row=mysqli_fetch_assoc($query))  
                {   $dbusername=$row['username'];  
                    $dbpassword=$row['password'];
                    $dbname=$row['name'];  
                }  
                if($user == $dbusername && $pass_hash == $dbpassword)  
                {     
                    $_SESSION['sess_user']=$dbname;  
      
                    /* Redirect browser */  
                    header("Location: dashboard.php");  
                }  
            }
            else
            {   $query=mysqli_query($link,"SELECT * FROM login WHERE email='".$email."' AND password='".$pass_hash."'");  
                $numrows1=mysqli_num_rows($query);  
                if($numrows1!=0)  
                {   while($row=mysqli_fetch_assoc($query))  
                    {   $dbemail=$row['email'];  
                        $dbpassword=$row['password'];
                        $dbusername=$row['username'];
                        $dbname=$row['name'];  
                    }  
                    if($email == $dbemail && $pass_hash == $dbpassword)  
                    {     
                        $_SESSION['sess_user']=$dbname;  //Name of the user as the name of the session
      
                        /* Redirect browser */  
                        header("Location: dashboard.php");  //directs to dashboard
                    }  
                }
                else 
                {   Print '<script>alert("Invalid username or password!");</script>';
                    Print '<script>window.location.assign("homepage.html");</script>';
                    //echo "Invalid username or password!";  
                }
            }  
  
        } 
        else 
        {   Print '<script>alert("All fields are required!");</script>';
            Print '<script>window.location.assign("homepage.html");</script>';
            //echo "All fields are required!";  
        }  
    }  
?>