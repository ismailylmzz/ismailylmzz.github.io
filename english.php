<!DOCTYPE html>
<html>

<?php 
session_start();

?>
<head>
    <title>İngilizce</title>
    <meta name="viewport" content="width= device-width">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">


</head>

<body>
    <div class="row">
        <div class="navbar">
            <a href="index.php">Ana Sayfa</a>
            <a href="matematik.php">Matematik</a>
            <a href="science.php">Fen Bilimleri</a>
            <a href="#" class="active-header">İngilizce</a>
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
                <div class="header">
                    <h1 id="header"></h1>
                </div>
                <div class="content">
                    <div id="free_time" hidden>
                        <p>Öncelikle öğreneceğimiz kelimelerle başlayalım.</p> 
                       
                            <ul >
                                <li>Again: Tekrar </li>
                                <li>And: Ve</li>
                                <li>Answer: Cevap vermek</li>
                                <li>Ask: Sormak</li>
                                <li>Badminton: Tenise benzer bir oyun</li>
                                <li>Ball: Top</li>
                                <li>But: Ama, fakat</li>
                                <li>Can you say that again?: Onu tekrar söyleyebilir misin?</li>
                                <li>Bird: Kuş</li>
                                <li>Chess: Satranç</li>
                                <li>Color: Boyamak / Boya</li>
                                <li>Come: Gelmek / Gel</li>
                                <li>Computer games: Bilgisayar oyunları</li>
                                <li>Cooking: Yemek pişirmek</li>
                                <li>Dancing: Dans etmek</li>
                                <li>Dislike: Sevmemek</li>
                                <li>Dictionary: Sözlük</li>
                                <li>Doing puzzles: Yapboz yapmak</li>
                                <li>Drawing pictures: Resim çizmek</li>
                                <li>Don’t like: Sevmemek</li>
                                <li>Driving: Araba sürmek</li>
                                <li>Example: Örnek</li>
                                <li>Favourite game: En sevilen oyun</li>
                                <li>Flower: Çiçek</li>
                                <li>Flying a kite: Uçurtma uçurtmak</li>
                                <li>Free time: Boş zaman</li>
                                <li>Game: Oyun</li>
                                <li>Help: Yardım etmek</li>
                                <li>Hobbies: Hobiler
                                </li>
                                <li>Learn: Öğrenmek</li>
                                <li>Like: Sevmek</li>
                                <li>Listening to music: Müzik dinlemek</li>
                                <li>Not much: Çok değil, pek değil</li>
                                <li>Of course: Tabii ki
                                </li>
                                <li>Painting: Boyamak</li>
                                <li>Picture: Resim</li>
                                <li>Planting trees: Ağaç dikmek</li>
                                <li>Play: Oynamak</li>
                                <li>Player: Oyuncu</li>
                                <li>Playing chess: Satranç oynamak</li>
                                <li>Playing tennis: Tenis oynamak</li>
                                <li>Please: Lütfen</li>
                                <li>Read: Okumak</li>
                                <li>Watching cartoons: Çizgi film izlemek</li>
                                <li>Riding a bike: Bisiklet sürmek</li>
                                <li>Running: Koşmak</li>
                                <li>Say: Söylemek / Söyle</li>
                                <li>Sing: Şarkı söylemek</li>
                                <li>Skating: Paten kaymak</li>
                                <li>Slowly: Yavaşça</li>
                                <li>Smelling: Koklamak </li>
                                <li>Star: Yıldız</li>
                                <li>Stick: Yapıştırmak</li>
                                <li>Sun: Güneş </li>
                                <li>Thank you: Teşekkür ederim</li>
                                <li>Weekend: Haftasonu</li>
                                <li>Watching TV: Televizyon izlemek  </li>
                            </ul>
                            <p>Sevdiğimiz aktiviteleri anlatmak için "like" kelimesini kullanırız.</p>
                            <p>Örneğin:</p>
                            <ul>
                                <li>I like playing chess (Satranç oynamayı severim)</li>
                                <li>I like playing football (Futbol oynamayı severim)</li>
                            </ul>
                            <p>Karşımızdaki birine nelerden hoşlandığını sormak için "do" kelimesini kullanırız. "Do you like" diye soru cümlemizi başlatırız.</p>
                            <p>Örneğin:</p>
                            <ul>
                                <li>Do you like reading a book? (Kitap okumayı sever misin?)</li>
                                <li>Do you like playing chess? (Satranç oynamayı sever misin?)</li>
                            </ul>
                            <p>Karşmızdakinin bize sorduğu şeyi sevmiyorsak "no I don't" şeklinde yanıt verebilir.</p>
                            <ul>
                                <li>Do you like wathing TV? </li>
                                <li>No, I don't</li>
                            </ul>
                            <p>Sevmediğimiz şeyleri ifade etmek için "don't" kelimesini kullanırız.</p>
                            <ul>
                                <li>I don't like skipping rope (İp atlamayı sevmem)</li>
                            </ul>


                        
                       
                    </div>
                    <div id="nation" hidden>
                        <p>Öncelikle kelimelerimizi öğrenerek başlayalım yine.</p>
                        <ul>
                            <li>Africa: Afrika</li>
                            <li>Age: Yaş
                            </li>
                            <li>Antarctica: Antarktika
                            </li>
                            <li>Asia: Asya</li>
                            <li>Compass: Pusula</li>
                            <li>Country: Ülke</li>
                            <li>East: doğu</li>
                            <li>Europe:  Avrupa</li>
                            <li>From: İtibaren, -den</li>
                            <li>Guess: Tahmin etmek</li>
                            <li>I think:  Bence
                            </li>
                            <li>Live: Yaşamak</li>
                            <li>Nationality: Milliyet</li>
                            <li>North: Kuzey</li>
                            <li>South / North America: Güney / Kuzey Amerika</li>
                            <li>South: Güney</li>
                            <li>West: Batı</li>
                            <li>World: Dünya</li>
                        </ul>
                        <p>Bazı ülkeler ve milliyerler:</p>
                        <ul>
                            <li>England: İngiltere</li>
                            <li>English: İngiliz/Ingilizce</li>
                            <li> Turkey: Türkiye</li>
                            <li>Turkish: Türk</li>
                            <li>Spain: İspanya</li>
                            <li>Spanish: İspanyol</li>
                            <li>Denmark: Danimarka</li>
                            <li>Danish: Danimarkalı</li>
                            <li>Australia: Avustralya</li>
                            <li>Australian: Avustralyalı</li>
                            <li>Belarus: Beyaz Rusya</li>
                            <li>Russian: Rusça</li>
                            <li>Belgium: Belçika</li>
                            <li>Bosnia and Herzegovina: Bosna Hersek</li>
                            <li>Belgian: Belçikalı</li>
                            <li>Brazil: Brezilya</li>
                            <li>Bulgaria: Bulgaristan</li>
                            <li>Canada: Kanada</li>
                            <li>China : Çin</li>
                            <li>Chinese: Çinli</li>
                            <li>Croatia :  Hırvatistan</li>
                            <li>Ecuador : Ekvator</li>
                            <li>Egypt : Mısır</li>
                            <li>France: Fransa</li>
                            <li>Germany : Almanya</li>
                            <li>Greece : Yunanistan</li>
                            <li>Hungary : Macaristan</li>
                            <li>Ireland : İrlanda</li>
                            <li>Italy : İtalya</li>
                            <li>Japan : Japonya</li>
                            <li>Palestine : Filistin</li>
                            <li>Portugal : Portekiz</li>
                            <li>Russia : Rusya</li>
                            <li>Switzerland : İsviçre</li>
                            <li>Ukraine : Ukrayna</li>
                            <li>United States of America :  ABD</li>
                            <li>American : Amerikalı</li>
                        </ul>
                        <p>Dikkat ettiyyseniz ülkelerin dil ve milliyet kelimeleri aynı kelimedir.</p>
                        <p>Örneğin: Turkish kelimesi hem Türk hem de Türkçe anlamına gelmektedir.</p>
                        <p>Birinin nereli olduğunu öğrenmek için "Where are you from" deriz. Buna karşılık olarak ise "I am from _____" şeklinde cevap verilebilir. </p>
                        <p>Örneğin: </p>
                        <ul>
                            <li>Where are you from? (Nerelisin?)</li>
                            <li>I am from Turkey. (Türkiyeliyim)</li>
                        </ul>

                    </div>

                    <div id="jobs" hidden>
                        <p>Her zaman olduğu gibi ilk önce kelime öğrenelim. Aşağıdaki kelimeleri inceleyiniz.</p>
                        <ul>
                            <li>Actor: Erkek oyuncu</li>
                            <li>Actress: Kadın oyuncu</li>
                            <li>Airport: Havaalanı</li>
                            <li>Businessman: İş adamı</li>
                            <li>Chef: Şef, aşçı</li>
                            <li>Dancer: Dansçı</li>
                            <li>Dentist: Diş hekimi</li>
                            <li>Dislike: Sevmemek</li>
                            <li>Doctor: Doktor</li>
                            <li>Examine: Muayene etmek</li>
                            <li>Farmer: Çiftçi</li>
                            <li>Fireman: İtfaiyeci</li>
                            <li>Job: Meslek</li>
                            <li>Nurse: Hemşire</li>
                            <li>Pilot: Pilot</li>
                            <li>Policeman: Erkek polis</li>
                            <li>Policewoman: Kadın polis</li>
                            <li>Scientist: Bilim insanı</li>
                            <li>Shoemaker: Ayakkabıcı</li>
                            <li>Singer: Şarkıcı</li>
                            <li>Singer: Şarkıcı</li>
                            <li>Singer: Şarkıcı</li>
                            <li>Singer: Şarkıcı</li>
                            <li>Writer: Yazar</li>
                            <li>Lawyer: Avukat</li>
                        </ul>
                        <p>Mesleğimizi "I am teacher" şeklinde olduğu gibi ifade edebiliriz.</p>
                        <p>Birine mesleğiniz sormak için "What is your job?" şeklinde sorabiliriz.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
    <script src="english.js"></script>



</body>

</html>