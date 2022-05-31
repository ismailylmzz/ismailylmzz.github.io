<?php 
include "../login/session-control.php";


?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sinav-giris.css">
    <link rel="script" href="questions_control.js">

    <title>Sonuç</title>
</head>
<body onload="set_not(); set_ders(); set_values();">
    <div class="main">
        <div class="title"><h1>Sınav Sonucu</h1></div>
        <div class="bilgiler">
            <table>
                <tr>
                    <td>Ders Adı:</td>
                    <td id="sonuc_ders"> </td>
                </tr>
                <tr>
                    <td>Soru Sayısı:</td>
                    <td >10</td>
                </tr>
                <tr>
                    <td >Puan:</td>
                    <td id="sonuc_id" > </td>
                </tr>
                
            </table>
            <div class="buton-field">
                <form action="save-not.php" method="post" >
                    <input type="text" name="ders" id="ders" hidden>
                    <input type="text" name="not" id="not" hidden>
                    <input type="submit" class="homepage" value="Ana Sayfaya Dön">
                </form>
                </div>
        </div>
    </div>
    <form action="#" hidden>

    </form>
    <script src="questions_control.js">
    </script>
    <script>
        function set_values(){
        document.getElementById("ders").value = document.getElementById("sonuc_ders").innerHTML;
        document.getElementById("not").value = document.getElementById("sonuc_id").innerHTML; 
        }


    </script>
    

</body>
</html>