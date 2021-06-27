<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
    <?php 
    include("dbconf.php");
    $selectQuery="SELECT * FROM users";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>City</th><th>Gender</th><th>Age</th><th>Update</th><th>Delete</th></tr>";
    if($result=mysqli_query($con,$selectQuery)){
        while($users=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $users['id']?></td>
                <td><?php echo $users['name']?></td>
                <td><?php echo $users['email']?></td>
                <td><?php echo $users['city']?></td>
                <td><?php echo $users['gender']?></td>
                <td><?php echo $users['age']?></td>
                <td><a href="update.php?id=<?php echo $users['id']?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $users['id']?>">Delete</a></td>
            </tr>
            <?php
        }
    }
    ?>
</body>
</html>