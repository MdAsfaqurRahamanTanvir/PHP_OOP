
<?php
    
    include("connectdb.php");
  session_start();
    
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
   
   <?php
    
    if(isset($_SESSION['authentication']) || isset($_COOKIE['authentication']))
        {
            if($_COOKIE['authentication'])
            {
                if($_COOKIE['authentication']==1111)
                    {
                        header("Location:reg.php");
                    }
               
            }
            else
            {
                if($_SESSION['authentication']==1111)
                {
                    header("Location:reg.php");
                }
            }
            
        }
    
    
  
    
    
    if(isset($_POST['submit_btn']))
    {
      
//  
        $username=$_POST['username'];
        $password=$_POST['password'];
        $check=isset($_POST['checkbox'])?1:0;
        
        $login="SELECT phone FROM admin WHERE username='$username' AND password='$password'";
        
        $result=$conn->query($login);
        
        if($result->num_rows>0)
        {
            $_SESSION['authentication']=1111;
            if($check==1)
            {
                setcookie('authentication',1111,time()+(60*60*2),'/');
            }
            header("Location:reg.php");
        }
        else
        {
            echo "Invalid USerName or Password!!!!!";
        }
       
        
    }
    
    ?>
   
    
    <form action="" method="post">
        <label for="text">Enter Your UserName: </label>
        <input type="text" name="username" placeholder="Enter Your USername"><br>
        <br>
        <label for="text">Enter Your Password: </label>
        <input type="password" name="password"><br>
        <br>
        <input type="checkbox" name="checkbox">Keep me logged in
        <br>
        <br>
        <input type="submit" name="submit_btn" value="Login">
        
        <br>
        <br>
        
    </form>
</body>
</html>