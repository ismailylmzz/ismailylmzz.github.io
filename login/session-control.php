<?php 
session_start();
if (!isset($_SESSION["email"])){
    header ("Location: /project/login/login.php");
}
?>