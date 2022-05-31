<?php 
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title >Matematik</title>
    <meta name="viewport" content="width= device-width">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">


</head>

<body>
    <div class="row">
        <div class="navbar">
            <a href="index.php" >Ana Sayfa</a>
            <a href="#" class="active-header">Matematik</a>
            <a href="science.php" >Fen Bilimleri</a>
            <a href="english.php" >İngilizce</a>
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
                <div class="leftheader" id="content_header">
                </div>
                
            </div>
            <div class="columnmain">
                <div class="header" ><h1 id="header"></h1></div> 
                <div class="content"> 

                    <div id="carpma" >
                        <p>Bir çarpma işleminde çarpılan sayılara çarpan, sonuca ise çarpım denir. Çarpma işlemi “x” sembolü ile veya “.” işaretiyle gösterilir.</p>
                    <img src="math_images/0.png" alt="Çarpma İşlemi" >
                    <img src="math_images/1.png" style="padding-left: 48px ;">
                    <p>Aslında çarpma işlemi toplama işleminin kısa yoludur. Çünkü yukarıdaki örnekte 112 sayısı ile 4’ü çarpmakla 4 tane 112 sayısını toplamak aynı şeydir.</p>
                    <h3>Örnek 1</h3>
                    <p>Okul kütüphanesinde toplam 128 tane raf bulunmaktadır. Her rafta 1 düzine kitap olduğuna göre kütüphanedeki toplam kitap sayısını bulalım.</p>
                    <h3>Çözüm 1</h3>
                    <img src="math_images/2.png" alt="">
                    <p>Yukarıdaki çözümde de görüldüğü üzere, 2. çarpanın birler basamağında ki “2” sayısı ile 1. çarpanı çarpalım. Sonucu yazalım(256). 
                        Ardından 2. çarpanın onlar basamağındaki “1” sayısı ile 1. çarpanı çarpalım. Çıkan sonucu birinci sonucun altına bir basamak sola kaydırarak yazarız. 
                        Bunu şu şekilde düşünebiliriz; 2. çarpanın onlar basamağının basamak değeri 10 olduğu için 1. çarpanla çarptığımız için sonuç 1280 çıkar ancak sıfır yazılmaz.</p>
                    </div>

                    
                    <div id="bolme" >
                        <h3 class="content-header">Kalanlı Bölme İşlemi</h3>
                        <p>Mihriban Hanım, 85 cevizi 6 çocuğa eşit bir şekilde paylaştırmak istiyor. Her çocuğa kaç ceviz düşer ve geriye kaç ceviz kalır, bulalım. </p>
                        <img src="math_images/4-sinif-bolme-islemi.jpg" alt="">
                        <h3 class="content-header">Bölümün Basamak Sayısını Belirleyelim</h3>
                        <p>Üç basamaklı bir sayı, bir basamaklı bir sayıya bölünürken bölümün basamak sayısını işlem yapmadan bulmak için bölünenin yüzler basamağındaki rakam ile bölen karşılaştırılır.</p>
                        <p>Bölünenin yüzler basamağındaki rakam bölenden;</p>
                        <ul >
                            <li>Küçük ise bölüm iki basamaklıdır,</li>
                            <li>Küçük değil ise bölüm üç basamaklıdır.</li>
                        </ul>
                        <h3 class="content-header">Örnek</h3>
                        <p>Aşağıda verilen bölme işlemlerini yapmadan bölümün basamak sayısını belirleyelim.</p>
                        <img src="math_images/bolme2.jpg" alt="">
                        <h3 class="content-header">Örnek</h3>
                        <p>Bir çiftlikteki tavuklar günde 674 yumurta yumurtlamaktadır. Çiftlik sahibi her biri 15 yumurta alan kutulara koymak istemektedir. 
                            Buna göre kaç kutuya ihtiyaç olduğunu bulalım.</p>
                            <p style="text-align: center;">Kalan < Bölen</p>
                            <p style="text-align: center;">14 < 15</p>
                        <p>Bölme işleminin doğruluğunu kontrol edelim. Bölen ile bölümün çarpımına kalanı eklediğimizde sonuç, bölünene eşit olmalıdır.</p>
                        <p style="text-align: center; ">Bölen × Bölüm = 15 × 44 = 660</p>
                        <p style="text-align: center; ">660’a, kalanı yani 14’ü ekleyelim.</p>
                        <p style="text-align: center; ">Bölünen = 660 + 14 = 674</p>
                        <p style="text-align: center; ">Bölme işlemimiz doğrudur.</p>

                    </div>
                    
                    <div id="uzunluk">
                        <h3 class="content-header">Uzunluk Ölçme</h3>
                        <p>Metre, santimetre ve kilometre birimleri aşağıdaki gibidir;</p>
                        <ul>
                            <li>1m = 100 cm.</li>
                            <li>1km = 1000 m.</li>
                            <li>Çevremizdeki çok büyük uzunlukları kilometre ile ölçeriz.</li>
                            <li>Kilometre, kısaca “km” olarak gösterilir.</li>
                        </ul>
                        <p>Uzunluk ölçü birimlerinin büyüklük küçüklük bakımından sıralanışı km > m > cm > mm şeklindedir.</p>
                        <h3 class="content-header">Milimetre</h3>
                        <img src="math_images/milimetre.jpg" alt="">
                        <p>Santimetre ile ölçemeyeceğimiz kadar küçük uzunlukları belirtirken “milimetre” ölçü birimini kullanırız. 
                            Milimetre, kısaca “mm” olarak gösterilir. Milimetre, santimetrenin onda biridir.</p>
                        <p style="text-align: center;">1 cm = 10 mm</p>
                        <h3 class="content-header">Milimetrenin Kullanım Alanları</h3>
                        <ul>
                            <li>Camın kalınlığını ölçerken milimetre kullanırız.</li>
                            <li>Pirinç tanesinin uzunluğunu ölçerken milimetre kullanırız.</li>
                            <li>Çivinin uzunluğunu ölçerken milimetre kullanırız.</li>
                            <li>Raptiyenin uzunluğunu ölçerken milimetre kullanırız.</li>
                        </ul>
                        <h3 class="content-header">Uzunluk Ölçme Birimleri Arasındaki İlişkiler</h3>
                        <p>Kilometre birimindeki uzunluk ölçüsünü metre birimine dönüştürmek için sayıyı 1000 ile çarpar,
                             metre birimindeki uzunluk ölçüsünü kilometre birimine dönüştürmek için sayıyı 1000‘e böleriz.</p>
                        <p>Aşağıda verilen uzunlukları, istenilen ölçü birimlerine dönüştürelim.</p>
                        <table>
                            <tr >
                                <td>2 km = 2000 m</td>
                                <td>4000 m = 4 km</td>
                            </tr>
                            <tr>
                                <td>8 km 12 m = 8012 m</td>
                                <td>3055 m = 3 km 55 m</td>
                            </tr>
                        </table>
                        <p>Metre birimindeki uzunluk ölçüsünü santimetre birimine dönüştürmek için sayıyı 100 ile çarpar, 
                            santimetre birimindeki uzunluk ölçüsünü metre birimine dönüştürmek için sayıyı 100‘e böleriz.</p>

                        <p>Aşağıda verilen uzunlukları, istenilen ölçü birimlerine dönüştürelim.</p>
                        <table>
                            <tr >
                                <td>7 m = 700 cm</td>
                                <td>500 cm = 5 m</td>
                            </tr>
                            <tr>
                                <td>4 m 8 cm = 408 cm</td>
                                <td>640 cm = 6 m 40 cm</td>
                            </tr>
                        </table>
                        <p>Santimetre birimindeki uzunluk ölçüsünü milimetre birimine dönüştürmek için sayıyı 10 ile çarpar, 
                            milimetre birimindeki uzunluk ölçüsünü santimetre birimine dönüştürmek için sayıyı 10‘a böleriz.</p>

                         <p>Aşağıda verilen uzunlukları, istenilen ölçü birimlerine dönüştürelim.</p>
                        <table>
                            <tr >
                                <td>2 cm = 20 mm</td>
                                <td>90 mm = 9 cm</td>
                            </tr>
                            <tr>
                                <td>5 cm 30 mm = 80 mm</td>
                                <td>55 mm = 5 cm 5 mm</td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
    <script src="math-content.js"> </script>

</body>

</html>