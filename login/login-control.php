<?php 

$email = $_POST["email"];
$password = $_POST["password"];
include "config.php";


$sql = "SELECT * FROM user WHERE email= '$email' AND password= '$password'";

$result = mysqli_query ($conn, $sql);
$num_rows = mysqli_num_rows($result);
print_r($result);
if ($num_rows >= 1) {
    echo "giris yapildi";
    session_start();
    $_SESSION['email'] = $email;
    header ('Location: ../index.php');
}else {
    echo "giris basarisiz ";
}
?>
