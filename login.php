<?php
        //include('dbconf.php');
        // if($_SERVER['REQUEST_METHOD']=='POST'){
        //     $id=mysqli_real_escape_string($con,$_POST['id']);
        //     $password=md5(mysqli_real_escape_string($con,$_POST['password']));
        //     $loginQuery="SELECT * FROM users WHERE id='$id' AND password='$password'";
        //     $result=mysqli_query($con,$loginQuery);
        //     $user=mysqli_fetch_array($result);
        //     echo $user['name'];
        // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<form action="" method="POST">
<label>Email</label>
<input type="email" name="email"/></br>
<label>Password</label>
<input type="password" name="password"/></br>
<input type="submit" name="login" value="Log in"/>
</form>
<?php
    include('dbconf.php');
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $loginQuery="SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
        if($result=mysqli_query($con,$loginQuery)){
            $user=mysqli_fetch_row($result);
            $_SESSION['user']=$user;
            print_r($user);
        }  
    }
?>
<body>
    
</body>
</html>
