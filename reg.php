
<?php
include("connectdb.php");

if(isset($_POST['submit_btn']))
{
    $username=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=isset($_POST['gender'])==true?$_POST['gender']:"";
    
    
    $target_folder='';
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size']/1024;
    $file_ext=pathinfo($file_name, PATHINFO_EXTENSION);
    $target_folder="uploads/".uniqid().".".$file_ext;
    $check=getimagesize($_FILES['image']['tmp_name']);
    
    if($check!=0)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],$target_folder);
    }
    
    if($username!="" && $email!="" && $address!="")
    {
        $insert="INSERT into student_info(name,email,phone,address,gender,image) VALUES('$username','$email','$phone','$address','$gender','$target_folder')";
        
        $result=$conn->query($insert);
        
        if($result==true)
        {
            echo "Student Registration Completed!!";
        }
        else
        {
            die($conn->connect_error);
        }
    }
    else
    {
        echo "FIll The required Field!!";
    }
}

$fetchstudent="SELECT * FROM student_info";

$result_std=$conn->query($fetchstudent);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration Form</title>
</head>
<body>
    
    
    <div class="add_student">
        <h1>Add Student</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="text">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Email</label>
                <input type="text" name="email" placeholder="Enter Your Email">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Phone</label>
                <input type="text" name="phone" placeholder="Enter Your Phone">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Address</label>
                <input type="text" name="address" placeholder="Enter Your Address">
                <br>
            </div>
            <br>
            
            <div class="form-group">
                <label for="text">Gender</label><br>
                <input type="radio" name="gender" value="1">Male <br>
                <input type="radio" name="gender" value="0"> Female <br>
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
            
            <input type="submit" name="submit_btn" value="Submit">
            <br>
            <br>
        </form>
        
        <br>
        <br>
        <br>
        
        <?php if($result_std->num_rows>0) {?>
        <div class="student_data">
            <table cellpadding="10" border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                
                <?php while($result_std_row=$result_std->fetch_assoc()) {?>
                
                <tr>
                    <td><?php echo $result_std_row['name'] ?></td>
                    <td><?php echo $result_std_row['email']?></td>
                    <td><?php echo $result_std_row['phone']?></td>
                    <td><?php echo $result_std_row['address']?></td>
                    <td><?php echo $result_std_row['gender']==1?"Male":"Female"?></td>
                    <td><img src="<?php echo $result_std_row['image']?>" alt="#" height="100" width="100"></td>
                    <td><a href="edit.php?id=<?php echo $result_std_row['id']?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $result_std_row['id']?>">Delete</a></td>
                </tr>
                <?php }?>
            </table>
        </div>
         <?php }?>
        <a href="logout.php">Logout</a>
    </div>
    
</body>

</html>