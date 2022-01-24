<?php
session_start();
 
        if(isset($_SESSION['authentication']) || $_COOKIE['authentication'])
        {
            session_destroy();
            setcookie('authentication',null,time()-3600,'/');
            header("Location:index.php");
        }
    
?>