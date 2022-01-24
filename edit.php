<?php

include('connectdb.php');

if(isset($_POST['submit_btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $id=$_POST['id'];
    
    $updatequery="update student_info set Name='$name',Email='$email',Phone='$phone',Address='$address' where id='$id'";
    $result=$conn->query($updatequery);
    
    if($result==true)
    {
        echo "Update successfully!!";
        header("Location:reg.php");
    }
    else
    {
        die($conn->connect_error);
    }
}

else
{
    if(isset($_GET['id']))
    {
        $updateid=$_GET['id'];
        $selectdata="Select * from student_info where id='$updateid'";
        
        $fetchdata=$conn->query($selectdata);
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
</head>
<body>
    
    <?php while($singledata=$fetchdata->fetch_assoc()) {?>
    <div class="add_student">
        <h1>Edit Student</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $singledata['id']; ?>">
            <div class="form-group">
                <label for="text">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $singledata['name']?>">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Email</label>
                <input type="text" name="email" placeholder="Enter Your Email" value="<?php echo $singledata['email']?>">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Phone</label>
                <input type="text" name="phone" placeholder="Enter Your Phone" value="<?php echo $singledata['phone']?>">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Address</label>
                <input type="text" name="address" placeholder="Enter Your Address" value="<?php echo $singledata['address']?>">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Gender</label><br>
                <input type="radio" name="gender" value="1" <?php echo $singledata['gender']==1?"checked":""?> >Male <br>
                <input type="radio" name="gender" value="0"  <?php echo $singledata['gender']==0?"Checked":""?>  > Female <br>
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Image</label><br>
                <input type="file" name="image">
                <input type="submit" name="img_btn" value="Upload">
                <br>
            </div>
            <br>
            
            <input type="submit" name="submit_btn" value="Update">
            <br>
            <br>
        </form>
    </div>
    <?php }?>
</body>
</html>


<?php

                                                       } else{
        header("Location:reg.php");
    }
}
    
?>