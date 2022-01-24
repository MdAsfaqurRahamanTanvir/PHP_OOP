<?php

include('connectdb.php');

if(isset($_GET['id']))
{
    $deleteid=$_GET['id'];
    
    $deletequery="DELETE From student_info where Id='$deleteid'";
    
    if($conn->query($deletequery))
    {
        header("Location:reg.php");
    }
    else
    {
        die($conn->connect_error);
    }
    
    
}
else
{
    header("Location:reg.php");
}

?>