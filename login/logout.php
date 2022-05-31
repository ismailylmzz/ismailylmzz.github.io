<?php 
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    session_unset();
    session_destroy();
    header("Location: ../index.php")
    ?>
    
</body>
</html>