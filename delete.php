<?php
$userID=$_GET['id'];
$deleteQuery="DELETE FROM users WHERE id='".$userID."'";
mysqli_query($con,$deleteQuery);
echo mysqli_affected_rows($con)."Row Deleted Successfully. User ID = ".$userID." Deleted";
?>