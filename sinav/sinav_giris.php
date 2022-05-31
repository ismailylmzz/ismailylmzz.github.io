<?php 
include "../login/session-control.php";

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sinav-giris.css">
    <title>Sınav Giriş</title>
    <link rel="script" href="questions_control.js">
</head>
<body>
    <script>
    

    </script>
    <div class="main"> 
        <div class="title">
            <h1>Sınav Bilgileri</h1>
        </div>
        <div class="bilgiler">
            <table>
                <tr>
                    <td>Ders Adı:</td>
                    <td id="quiz">Matematik</td>
                </tr>
                <tr>
                    <td>Soru Sayısı:</td>
                    <td >10</td>
                </tr>
                <tr>
                    <td>Sınav Süresi:</td>
                    <td>5 Dakika</td>
                </tr>
                <tr>
                    <td>Açıklama:</td>
                    <td>Sınav çoktan seçmeli ve cevap doldurmalı sorulardan oluşmaktadır.</td>
                </tr>
            </table>
        </div>
        <div class="dersler">  
                <a href="#" onclick="change_quiz('Matematik')">Matematik</a>
                <a href="#" onclick="change_quiz('Fen Bilimleri')">Fen Bilimleri</a>
                <a href="#" onclick="change_quiz('İngilizce')">İngilizce</a>
        </div>
        <div class="buton-field">
            <form action="display_question.php" method="post">
                <input type="text" name="quiz_name"  id="quiz_name" hidden >
                <input type="submit" class="buton"  value="Sınavı Başlat" onclick="document.getElementById('quiz_name').value = document.getElementById('quiz').innerHTML">
            </form>
        </div>
    </div>
    <script src="sinav_giris.js"></script>
</body>
</html>