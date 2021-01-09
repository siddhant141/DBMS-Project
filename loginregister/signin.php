<?php  
    if(isset($_POST["submit"]))
    {   if(!empty($_POST['user']) && !empty($_POST['pass'])) 
        {  
            $user=$_POST['user'];  
            $pass=$_POST['pass'];
            $email=$_POST['user'];
            $pass_hash=md5($pass);  
            $con=mysqli_connect('localhost','root','','user') or die(mysqli_error());   
            $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass_hash."'");  
            $numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {   while($row=mysqli_fetch_assoc($query))  
                {   $dbusername=$row['username'];  
                    $dbpassword=$row['password'];
                    $dbname=$row['name'];  
                }  
                if($user == $dbusername && $pass_hash == $dbpassword)  
                {   session_start();  
                    $_SESSION['sess_user']=$dbname;  
      
                    /* Redirect browser */  
                    header("Location: member.php");  
                }  
            }
            else
            {   $query=mysqli_query($con,"SELECT * FROM login WHERE email='".$email."' AND password='".$pass_hash."'");  
                $numrows1=mysqli_num_rows($query);  
                if($numrows1!=0)  
                {   while($row=mysqli_fetch_assoc($query))  
                    {   $dbemail=$row['email'];  
                        $dbpassword=$row['password'];
                        $dbusername=$row['username'];
                        $dbname=$row['name'];  
                    }  
                    if($email == $dbemail && $pass_hash == $dbpassword)  
                    {   session_start();  
                        $_SESSION['sess_user']=$dbname;  
      
                        /* Redirect browser */  
                        header("Location: member.php");  
                    }  
                }
                else 
                {  
                    echo "Invalid username or password!";  
                }
            }  
  
        } 
        else 
        {  
            echo "All fields are required!";  
        }  
    }  
?>