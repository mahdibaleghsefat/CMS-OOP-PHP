<?php 

include("database.php");

$sql = "SELECT * FROM users WHERE id=1";
$result = $database->query($sql);
$user_found = mysqli_fetch_array($result);

echo $user_found['username'];