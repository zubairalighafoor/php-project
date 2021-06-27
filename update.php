<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include("dbconf.php");
$userID=$_GET['id'];
$selectQuery="SELECT * FROM users WHERE id='".$userID."'";
        if($result=mysqli_query($con,$selectQuery)){
            $user=mysqli_fetch_assoc($result);
        }
?>
<form name="signUpForm" method="POST" action="">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>"/><br/>
    <label>Email</label>
    <input type="Email" name="email"  value="<?php echo $user['email']; ?>"/><br/>
    <label>City</label>
    <input type="text" name="city"  value="<?php echo $user['city']; ?>"/><br/>
    <label>Age</label>
    <input type="text" name="age"  value="<?php echo $user['age']; ?>"/><br/>
    <label>Gender:</label>
    <label><input type="radio" name="gender" <?php if($user['gender']=='male'){?> checked="checked" <?php } ?> value="Male"/>Male</label>
    <label><input type="radio" name="gender" <?php if($user['gender']=='female'){?> checked="checked" <?php } ?> value="Female"/>Female</label></br>
    <input type="submit" value="Update" name="update"/>
    </form>
<?php
if(isset($_POST['update']))

    $name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
$updateQuery="UPDATE users SET name='".$name."',email='".$email."',city='".$city."',gender='".$gender."',age='".$age."' WHERE id='".$userID."'";
mysqli_query($con,$updateQuery);
echo mysqli_affected_rows($con);
}
?>
<body>
    
</body>
</html>