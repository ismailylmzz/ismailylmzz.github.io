<?php 
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Fen Bilimleri</title>
    <meta name="viewport" content="width= device-width">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">


</head>

<body>
    <div class="row">
        <div class="navbar">
            <a href="index.php">Ana Sayfa</a>
            <a href="matematik.php" class="">Matematik</a>
            <a href="#"  class="active-header">Fen Bilimleri</a>
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
                <div class="header"><h1 id="header"></h1></div>
                <div class="content"> 

                    <div id="yer_kabugu" >
                        <h3 class="content-header">YER KABUĞU KAYAÇLARDAN OLUŞUR</h3>
                        <ul>
                            <li>Canlılar, Dünya’nın dış katmanında yani yer kabuğunda yaşarlar.</p>
                            <li>Yer kabuğunda dağlar,tepeler, ovalar, vadiler, yaylalar gibi yeryüzü şekilleri bulunur. </p>
                            <li>Yer kabuğu ve yeryüzü şekilleri kayaçlardan oluşmuştur.</p>
                            <li>Yer kabuğu okyanus, deniz ve göllerin altında da devam eder.</p>
                            <li>Yer kabuğu karaların olduğu yerlerde kalın, okyanus tabanlarında daha incedir.</p>
                            <li>Manto katmanında bulunan magmanın yeryüzüne ulaşarak soğuyup katılaşmasıyla kayaçlar oluşur. </p>
                            <li>Kayaçlar: rüzgâr, sıcaklık farkı,yağmur ve akarsu gibi dış faktörlerle parçalanır.</p>
                            <li>Bunun sonucunda kayaçlar kaya, çakıl, taş ve kum taneciklerine dönüşür.</p>

                        </ul>
                        <img src="science_images/0.jpg" alt="">
                        <p>Kırlarda, dağlarda, ovalarda yürürken çeşitli taşlar görürüz. </p>
                        <p>Bu taşlar farklı renklerde, parlaklıkta ve sertliktedir.</p>
                        <p>Kayaçların farklı olmasını sağlayan yapısındaki minerallerdir.</p>
                        <div class="clearfix">
                            <h4 class="content-header" >Örneğin</h4>
                            <img src="science_images/1.jpg" alt="" >
                            Pamukkale Travertenleri’nin beyaz renkte ve yumuşak bir yapıda olması bu mineraller sayesindedir.
                        </div>
                        <div class="clearfix">
                            <img src="science_images/2.jpg" alt="">
                            <p >Akkor hâlindeki aşırı sıcak magma (manto), yer kabuğunun derinliklerinden yanardağların yüzeyine doğru yükselir. Yüzeye çıkan magmaya lav adı verilir.</p>
                            <p>Yanardağdan yeni çıkmış lavın sıcaklığı 700 °C (derece selsiyus) ile 1200 °C (derece selsiyus) arasındadır.</p>
                            <p>Çay yapmak için demlikte kaynattığımız suyun 100 °C olduğunu düşünürsek çıkan lavın sıcaklığının ne kadar yakıcı olduğunu tahmin edebiliriz.</p>
                        </div>
                    </div>
                    <div id="dunya" >
                        <h2 class="content-header">Dünya'nın Dönme ve Dolanma Haraketi</h2>
                        <p>Üzerinde yaşadığımız Dünya’mız hareketsizmiş gibi görünür.
                            Oysa bütün gök cisimleri gibi Dünya’mız da sürekli hareket hâlindedir. </p>
                        <p>Dünya’nın dönme ve dolanma olmak üzere iki türlü hareketi vardır.
                            Her iki hareketin yönü de batıdan doğuya doğrudur.
                        </p>
                        <div class="clearfix">
                            <img src="science_images/3.jpg" alt="">
                            <p>Yandaki görsel, Dünya’nın hem kendi ekseni etrafında döndüğünü hem de Güneş’in etrafında dolandığını göstermektedir.</p>
                        </div>
                        <h3 class="content-header">Dönme ve Dolanma Hareketine Günlük Yaşamdan Örnekler</h3>
                        <div class="clearfix">
                            <img src="science_images/4.jpg" alt="">
                            <p>Elektrik enerjisi üreten rüzgâr türbinleri dönme hareketi yapar.</p>
                        </div>
                        <div class="clearfix">
                            <img src="science_images/5.jpg" alt="">
                            <p>Geleneksel oyuncaklarımızdan topaç, kurulup bırakıldığında dönme hareketi yapar.</p>
                        </div>
                        <div class="clearfix">
                            <img src="science_images/6.jpg" alt="">
                            <p>Farklı amaçlarla uzaya gönderilen üç bine yakın yapay uydu, Dünya’nın etrafında dolanma hareketi yapar.</p>
                        </div>
                        <h2 class="content-header">Dünya'nın Haraketlerinin Sonuçları</h2>
                        <h3 class="content-header">Dönme Haraketi</h3>
                        <div class="clearfix">
                            <img src="science_images/7.jpg" alt="">
                            <p>Dünya’mızın küre şeklindedir.</p>
                            <p>Dünya’mız küre şeklinde olduğundan bir tarafı Güneş ışınlarını alırken diğer tarafı alamaz.</p>
                            <p>Güneş ışınlarının ulaştığı yerlerde gündüz, Güneş ışınlarının ulaşmadığı yerlerde ise gece yaşanır.</p>
                            <p>Dünya kendi ekseni etrafında sürekli döner.</p>
                            <p>Böylece gece ve gündüz birbirini takip eder. Gündüz yaşanan bölgelerde birkaç saat sonra gece yaşanır.</p>
                            <p>Dünya kendi ekseni etrafında bu dönüşünü 24 saatte tamamlar. Bu süre bir gün olarak kabul edilir.</p>
                        </div>
                        <h4 class="content-header">Güneş mi Yoksa Dünya mı Hareket Ediyor?</h4>
                        <div class="clearfix">
                            <img src="science_images/8.jpg" alt="">
                            <p>Güneş’in her sabah doğudan doğduğunu, öğlen en tepede olduğunu, akşam ise batıdan kaybolduğunu gözlemleriz.</p>
                            <p>Bu şekilde gözlemlediğimiz için Güneş’in hareket ettiğini düşünürüz.</p>
                            <p>Dünya, batıdan doğuya doğru kendi ekseni etrafında döner. Bu nedenle Güneş’i farklı yerlerdeymiş gibi görürüz.</p>
                        </div>
                        <h2 class="content-header">Dolanma Hareketi</h2>
                        <div class="clearfix">
                            <img src="science_images/9.jpg" alt="">
                            <p>Dünya kendi etrafında dönme, Güneş’in etrafında dolanma hareketi yapar.</p>
                            <p>Dolanma hareketinin yönü batıdan doğuya doğrudur.</p>
                            <p>Dünya, Güneş’in etrafındaki dolanımını 365 gün 6 saatte tamamlar. Bu süre bir yıl olarak kabul edilir. Dünya’nın dolanma hareketi sonucunda mevsimler oluşur.</p>
                        </div>

                    </div>
                    <div id="kuvvet">
                        <p>Varlıkları hareket ettirmek için uygulanan itme ve çekmeye kuvvet adı verilir.</p>
                        <img src="science_images/k0.png" alt="">
                        <p>Günlük hayatımızda farkına varmadan birçok hareket yaparız. Odanın kapısını açmada, televizyonun 
                            düğmesini kapamada bir hareket uygularız. İtme ya da çekme şeklinde uygulanan kuvvet cismi hareket ettirir. 
                            Yerde duran bir cisme vurduğumuzda itme uygularız. Ağır bir yükü kaldırmak için çekme uygularız.</p>
                        <p>Bir yelkenlinin hareket etmesi için rüzgâr itme kuvveti uygular. Topu yukarı fırlatırken uygulanan kuvvet itme şeklindedir.
                                 Topun yere düşmesi ise yerçekimi kuvveti şeklinde oluşur. Hayatımızda itme ve çekme sıklıkla görülür.</p>
                        <p>Kuvvet cisimlerin hareketini ve şeklini etkiler. Her gün karşılaştığımız birçok olayın nedeni kuvvettir. 
                            Teneke kutunun üzerine oturunca çökmesi, bir yayı çektiğimizde yayın uzaması kuvvetin cisim üzerindeki etkisi sonucunda oluşur.</p>
                        
                            <p><h4>Kısaca kuvvet:</h4></p>
                            <ul>
                                <li>Hareketli cisimleri durdurabilir.</li>
                                <li>Hareketli cisimleri yavaşlatabilir.</li>
                                <li>Hareketli cisimleri hızlandırabilir.</li>
                                <li>Duran bir cismi hareket ettirebilir.</li>
                                <li>Hareketli cisimlerin yönünü değiştirebilir.</li>
                            </ul>
                            <p>Kuvvetin hangi durumlarda hangi durumlarda cisimler üzerinde hangi etkiyi göstereceğini örneklerle inceleyelim.</p>
                            <div class="clearfix">
                                <img src="science_images/k1.jpg" alt="">
                                <p>Hareketli bir cisme hareketi ile aynı yönde kuvvet uygulandığında cisim hızlanır.</p>
                                <p>Örneğin; hareket eden bir topa, hareketi ile aynı yönde daha fazla kuvvet uygularsak top hızlanır.</p>
                            </div>
                            <div class="clearfix">
                                <img src="science_images/k2.png" alt="">
                                <p>Hareketli bir cisme, hareket yönüne zıt (ters) yönde bir kuvvet uygularsak, cisim yavaşlar.</p>
                                <p>Örneğin, gemiler yavaşlamak için pervanelerini ters yönde döndürürler.</p>
                            </div>

                            <h2 class="content-header">Kuvvet Cisimlerin Şeklini Değiştirir </h2>
                            <div class="clearfix">
                                <img src="science_images/k3.png" alt="">
                                <p>Kuvvetin cisimler üzerinde hızlandırıcı, yavaşlatıcı ve yön değiştirici etkisinin yanında cisimlerin şeklini de değiştirebilme özelliği de vardır. 
                                    Örneğin; paket lastiğine germe kuvveti uyguladığımızda ya da sarmal yaya germe kuvveti uyguladığımızda boyu uzar, ince teli büktüğümüzde ve pet şişeyi 
                                    sıktığımızda şekli değişir.</p>
                            </div>

                            <div class="clearfix">
                                <img src="science_images/k4.png" alt="">
                                <p>Kuvvetin cisimler üzerindeki şekil değiştirme etkisinden yararlanılarak cisimlere istediğimiz şekli verebiliriz. 
                                    Örneğin, oyun hamuruna şekil verebilmek için kuvvet uygularız.</p>
                            </div>
                            <div class="clearfix">
                                <img src="science_images/k5.png" alt="">
                                <p>Cisimlere sıkma, bükme, vurma, germe gibi kuvvet uygulayarak şekillerini değiştirebiliriz. Ancak cisimlerin şeklini değiştirebilmek için uyguladığımız 
                                    kuvvet yeterli değilse cismin şeklinde herhangi bir değişiklik meydana gelmeyebilir</p>
                            </div>
                            <div class="clearfix">
                                <img src="science_images/k6.jpg" alt="">
                                <img src="science_images/k7.jpg" alt="">
                                <img src="science_images/k8.jpg" alt="">
                                <p>Bazı cisimlere kuvvet uyguladığımızda şekli değişir, kuvvet ortadan kalktığında eski haline geri döner. Bu cisimlere esnek cisimler denir. 
                                    Paket lastiği, yay, sünger esnek cisimlere örnektir.</p>
                            </div>

                            <div class="clearfix">
                                <img src="science_images/k9.jpg" alt=""> 
                                <p> Bilgi:  Esnek maddeler, uygulanan kuvvetin etkisi ortadan kaldırıldığında eski haline dönebilen maddelerdir.
                                    Bu yüzden oyun hamuru ve sakız gibi maddeler kuvvetin etkisi ortadan kaldırıldığında eski haline dönemediğinden esnek madde sınıfında yer almazlar.</p></div>
                                

                            
                            



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>


    <script src="science.js"></script>

</body>

</html>