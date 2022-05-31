<?php
$db_servername = "localhost" ;
$db_username = "ismail";
$db_password = "123";
$dbname = "web_project";

$conn = mysqli_connect($db_servername, $db_username, $db_password, $dbname);

if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}
echo "connected successfully<br>";
?>