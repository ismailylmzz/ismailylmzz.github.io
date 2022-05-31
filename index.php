<?php 
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Hoş Geldiniz</title>
    <meta name="viewport" content="width= device-width">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">

</head>

<body>
    <?php 


    ?>
    <div class="row">
        <div class="navbar">
            <a href="#" class="active-header">Ana Sayfa</a>
            <a href="matematik.php" class="">Matematik</a>
            <a href="science.php" >Fen Bilimleri</a>
            <a href="english.php" class="">İngilizce</a>
            <a href="sinav/sinav_giris.php" class="blink" >Sınav</a>
            <?php 
            if (isset($_SESSION["email"]) ){
                $loggedinfo =  "<a href='login/logout.php' style='float: right;' >Çıkış Yap ( " . $_SESSION['email']. " )</a>" ;

            } else {

                $loggedinfo =  "<a href='login/login.php' style='float: right;' >Giriş Yap / Kaydol</a>";
            
            }
            echo $loggedinfo ;
            ?>
            
            
        </div>
        <div>
            <div class="columnleft">
                <div class="leftheader">
                    <a href="#" >Açıklama</a>
                    <a href="#" >Hakkımızda</a>
                    <a href="#" >Bize ulaşın</a>
                </div>
                
            </div>
            <div class="columnmain">
                <div class="header"><h1>Hoş Geldiniz</h1></div> 
                <div class="content"> 
                    Bu sitede 3. ve 4. sınıf öğrencilerimize konu anlatımı yapıp onları sınava tabii tutuyoruz. 
                    Sınava girmeden önce konu anlatımlarını iyice okuyunuz. Sınav notunuz, sınav bittikten sonra belli olacaktır. 
                    Sınav linkleri konu anlatımlarının olduğu sayfadadır. 
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>