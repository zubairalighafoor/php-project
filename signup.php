<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="signUpForm" method="POST" action="">
    <label>Name</label>
    <input type="text" name="name"/><br/>
    <label>Email</label>
    <input type="Email" name="email"/><br/>
    <label>Password</label>
    <input type="password" name="password"/><br/>
    <label>City</label>
    <input type="text" name="city"/><br/>
    <label>Age</label>
    <input type="text" name="age"/><br/>
    <label>Gender:</label>
    <label><input type="radio" name="gender" value="Male"/>Male</label>
    <label><input type="radio" name="gender" value="Female"/>Female</label></br>
    <input type="submit" value="Sign Up" name="signup"/>
    </form>
    <?php
        include('dbconf.php');
        if(isset($_POST['signup'])){
            $name=$_POST['name'];
            $password=md5($_POST['password']);
            $email=$_POST['email'];
            $city=$_POST['city'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $insertQuery="INSERT INTO users(name,email,password,city,age,gender) VALUES('".$name."','".$email."','".$password."','".$city."','".$age."','".$gender."')";
            mysqli_query($con,$insertQuery);
            //echo $password;
            //print_r($_POST);
            echo mysqli_insert_id($con);
        }
    ?>
</body>
</html>