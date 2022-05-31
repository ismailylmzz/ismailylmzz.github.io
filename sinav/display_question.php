<?php 
include "../login/session-control.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sınav</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="display-question-style.css" type="text/css">
    <link rel="script" href="script.js">
    <link rel="script" href="questions_control.js">
</head>

<body>

    <div class="maincolumn">
        <div class="container" id="soru">
        </div>
        <div class="answercnt" id="cevap">
        </div>
        <div class="buttons">
            <div >
                <a href="#" class="previous" onclick="set_question(-99)">Önceki Soru</a>
            </div>
            <div >
                <a href="#" class="next" onclick="set_question(99)">Sonraki Soru</a>

            </div>
        </div>
    </div>


    <div class="rightcolumn">

        <div class="top">
            <div>
                <h3 id="time" class="timer"></h3>

            </div>
        </div>

        <div class="bottom">
            <div class="satir">
                <ul>
                    <li><a href="#" id="0" onclick="set_question(0)" class="active">1</a></li>
                    <li><a href="#" id="1" onclick="set_question(1)">2</a></li>
                    <li><a href="#" id="2" onclick="set_question(2)">3</a></li>
                    <li><a href="#" id="3" onclick="set_question(3)">4</a></li>
                    <li><a href="#" id="4" onclick="set_question(4)">5</a></li>
                    <li><a href="#" id="5" onclick="set_question(5)">6</a></li>
                    <li><a href="#" id="6" onclick="set_question(6)">7</a></li>
                    <li><a href="#" id="7" onclick="set_question(7)">8</a></li>
                    <li><a href="#" id="8" onclick="set_question(8)">9</a></li>
                    <li><a href="#" id="9" onclick="set_question(9)" >10</a></li>
                </ul>
            <div id="sinav_content" hidden><?php echo $_POST['quiz_name']?></div>
            </div>
            
            <div class="submit"><a href="sinav_sonuc.php" class="gonder-buton" onclick="end_quiz()">GÖNDER</a></div>
        </div>
        
    </div>
    <script src="questions_control.js"></script>
    <script src="script.js"></script>
</body>

</html>