<?php
include('connect-db.php');
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
mysqli_query($connection, "INSERT INTO rkostin_newsletter (email) VALUES ('$email')");
mysqli_close($connection);
header("Location: thanks.php");
?>