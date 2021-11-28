<?php
$username = "root";
$serverHost ="localhost";
$password = "";
$db = "bloger_student";
$conn = mysqli_connect($serverHost , $username , $password , $db);
if(!$conn)
    echo "not connect";

?>