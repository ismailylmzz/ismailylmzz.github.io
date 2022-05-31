<?php 
include "../login/config.php";

$not = $ders = "";


$not = (int)$_POST['not'];
$ders = $_POST['ders'];
echo "<br>$not, $ders";
if ($ders == "Matematik"){
    $ders = "math_not";
} else if ($ders == "Fen Bilimleri"){
    $ders = "fen_not";
}else if ($ders == "İngilizce"){
    $ders = "eng_not";
}

echo "<br> $ders";
$sql = "INSERT INTO user($ders)
        VALUES ($not)";

if (mysqli_query($conn, $sql)){
    echo "BASARILI";
    session_start();
    header("Location: ../index.php");
}  else {
    echo "basarisiz";
}
mysqli_close( $conn);

?>

