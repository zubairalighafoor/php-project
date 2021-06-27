<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 include("dbconf.php");
 if(isset($_SESSION['user'][0])){
     ?>
        <a href="allUsers.php">Show Users</a>
        <a href="logout.php">Logout</a>
     <?php
 }
 else{
     ?>
     <a href="signup.php">Sign Up</a><br/>
    <a href="login.php">Log In</a>
     <?php
 }
?>
    
</body>
</html>