<?php

include ('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO `login`(`id`, `username`, `password`) VALUES (NULL,'$username','$password')";
$query = mysqli_query($db,$sql);
header('Location: adminConsole.php');
mysqli_close($db);
 ?>
