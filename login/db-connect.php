
<?php 

include "config.php";


$email = $password = "" ;
$emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( empty($_POST["email"])){
        $emailErr = "Email girmeniz gerekiyor";
        header("Location: login.php");
    }else {

        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        header("Location: login.php");
        } 

    }

    if (empty($_POST["password"])) {
        $passwordErr = "Şifrenizi girmeniz gerekiyor.";
    }else {
        $password = test_input($_POST["password"]);
    }
}

echo "$email <br>" ;
if (empty($emailErr) && empty($passwordErr)){
    $sql = "INSERT INTO user(email, password)
        VALUES ('$email', '$password')";
    
if (mysqli_query($conn, $sql)){
    session_start();
    $_SESSION["email"] = $email;
    echo "yeni hesap olusturuldu";
    header("Location: ../index.php");
} 
mysqli_close( $conn);


}

function test_input ($data) {
    
    $data = trim($data); // bosluklari siler
    $data = stripslashes($data); // slashlari siler
    $data = htmlspecialchars($data);
    return $data;
}

?>