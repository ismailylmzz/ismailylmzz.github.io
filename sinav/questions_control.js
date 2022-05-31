var question_id = document.getElementById("soru");
var user_answers = []; // kullanici cevaplari
var answer_id = document.getElementById("cevap");
soru_number = 0;







content = document.getElementById("sinav_content").innerHTML;
console.log(content);

var eng_sorular = [
    "Zeynep helps the patients. <br> <p> Yukarıdaki cümleye göre, Zeynep’in mesleği aşağıdakilerden hangisidir? </p>",
    "My mother is a waitress. She ______ <br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir?</p>",
    "Ömer is a teacher. He teaches at _____ <br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir? </p>",
    "My mother ___ a pilot. She _____ at the airport. <br> <p>Yukarıdaki boşluklara aşağıdakilerden hangileri gelmelidir? </p>",
    "_____ cooks meals in restaurants.<br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir?</p>",
    "John: I am a _____ And I work on a restaurant. <br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir?</p>",
    "Mary: I like cooking cake and ______ .<br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir?</p>",
    "Hello, my name is Alex. I am a doctor. I like ______. <br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir?</p>",
    "This is Henry. He works at a post office. ________. <br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir?</p>",
    "Susan and John are dancers. They work at a _______. <br> <p>Yukarıdaki boşluğa aşağıdakilerden hangisi gelmelidir?</p>",
];
var eng_siklar = [
    [
        "A) Teacher",
        "B) Doctor",
        "C) Engineer",
        "D) Lawyer"
    ],
    [
        "A) cuts hair",
        "B) teaches children",
        "C) serves food",
        "D) helps the patients"
    ],
    [
        "A) airport",
        "B) police station",
        "C) fire station",
        "D) school"
    ],
    [
        "A) is/works",
        "B) are /work",
        "C) is/work",
        "D) are/works"
    ],
    [
        "A) An accountant",
        "B) A lawyer",
        "C) A chef",
        "D) A police"
    ],
    [
        "A) School",
        "B) Office",
        "C) Chef",
        "D) Police station"
    ],
    [
        "A) I work at a fire station.",
        "B) I work at a garden.",
        "C) I work at a cafe.",
        "D) I work at a farm."
    ],
    [
        "A) Cooking meals",
        "B) Planting flowers",
        "C) Driving cars",
        "D) Helping people"
    ],
    [
        "A) He is a postman.",
        "B) He is a teacher.",
        "C) He is a vet.",
        "D) He is a fireman."
    ],
    [
        "A) Music hall",
        "B) Police station",
        "C) Work center",
        "D) Post office"
    ],
];
var eng_dogru_cevaplar = [1, 2, 3, 0, 2, 2, 2, 3, 0, 0];  // 0=A, 1=B, 2=C, 3=D 

var math_sorular = [ 
    "128 x 3 işleminin sonucu kaçtır ?",
    "Zehra Hanım 89 tane cevizi 7 çocuğa eşit şekilde paylaştırmak istiyor. Her çocuğa düşen ceviz sayısı ve kalan ceviz sayısı kaçtır? ",
    "40+120/4 işleminin sonucu kaçtır?",
    "Bölüneni 391 olan bir sayının, böleni 17 olduğuna göre bölümün kaç olduğunu bulunuz.",
    "2 km 200m kaç cm'ye tekabül etmektedir.",
    "560 x ? = 2800 olduğuna göre ? ifadesinin temsil ettiği değeri bulunuz.",
    "2 km'lik yolu 7 kere gitmek zorunda olduğumuzu varsayalım. Bu durumda toplamda kaç metrelik yol gitmiş oluruz?",
    "Böleni 9 olan, bölümü 12 ve kalanı 3 olan bir işleminin bölüneni kaçtır?",
    "8400000 mm aşağıdaki uzunluklardan hangisine denk değildir? ",
    "45 * 43 işleminin sonucu nedir?",
];
var math_siklar = [
    [
        "A) 372.",
        "B) 384.",
        "C) 392.",
        "D) 386.",
    ],
     [
        "A) Kalan: 5, Dağıtılan: 12",
        "B) Kalan: 6, Dağıtılan: 11",
        "C) Kalan: 3, Dağıtılan: 12",
        "D) Kalan: 6, Dağıtılan: 10",
    ],
     ["A) 40", "B) 70", "C) 50", "D) 60"],
     
     ["input"],
     ["input"],
     ["input"],
     ["input"],
     ["input"],
     [
     "A) 8400 m",
     "B) 8 km 40m",
     "C) 84000 cm",
     "D) 84 km"
    ],
     ["input"]
     
];
var math_dogru_cevaplar = [1, 0, 1, '23', '220000', '5', '14000', '111', 0 , '1935'];

var science_questions = [
    "Varlıkları haraket ettirmek için uygulanan itme ve çekmeye _____ adı verilir.",
    "Aşağıdakilerden hangisi kuvvetin etkilerinden biri değildir?",
    "Aşağıdakilerden hangisi doğru değildir?",
    "Kayaçlarla ilgili söylenenlerden hangisi yanlıştır?",
    "Bazı cisimlere kuvvet uyguladığımızda şekli değişir, kuvvet ortadan kalktığında eski haline geri döner. Bu cisimlere ____ cisimler denir.",
    "Aşağıda verilenlerden hangisi esnek cisim değildir?",
    "I. Elektrik enerjisi üreten rüzgar türbinleri <br>II. Uzaya gönderilen uydular<br>III. Topaç <br><br> Yukarıdakilerden hangi(si)leri dolanma haraketi yapar?",
    "Dünyamız ____ şeklindedir.",
    "Topun yere düşmesini __________ kuvveti sağlar",
    "I. Pamukkale Travertenleri’nin beyaz renkte ve yumuşak bir yapıda olması mineraller sayesindedir. <br>II. Yanardağdan yeni çıkmış lavın sıcaklığı 700 °Cile 1200 °Carasındadır. <br>III. Yer kabuğu okyanus, deniz ve göllerin altında da devam eder. <br><br> Yukarıdakilerden hangi(si)leri doğrudur?"
]
var science_siklar = [
    ["text"],
    [
        "A) Haraketleri cisimleri durdurabilir.",
        "B) Cisimlerin şeklini değiştirebilir.",
        "C) Duran cisimleri haraket ettirebilir.",
        "D) Cisimlerin kütlelerini arttırabilir.",
    ],
    [
        "A) Dünya kendi etrafında ve güneşin etrafında döner",
        "B) Dünya kendi etrafında dolanma haraketi yapar.",
        "C) Dünya güneşin etrafındaki turunu 365 gün 6 saatte tamamlar.",
        "D) Dünyanın kendi ekseni etrafında dönmesi sonucu günler oluşur.",
    ],
    [
        "A) Magmanın yeryüzüne ulaşarak soğuyup katılaşmasıyla kayaçlar oluşur.",
        "B) Kayaçlar parçalanarak kaya, çakıl, taş ve kum taneciklerine dönüşür.",
        "C) Kayaçlar Dünya'nın iç katmanında bulunurlar.", // yanlıs
        "D) Kayaçların farklı renkte, parlaklıkta ve sertlikte olmasını sağlayan şey minarellerdir.",
    ],
    ["text"],
    [
        "A) Sakız",
        "B) Yay",
        "C) Sünger",
        "D) Lastik",
    ],
    [
        "A) Yalnız I",
        "B) I, II ve III",
        "C) I ve III",
        "D) yalnız II",
    ],
    ["text"],
    ["text"],
    [
        "A) Yalnız III",
        "B) II ve III",
        "C) I, II ve III",
        "D)  I ve II",
]
];
var science_dogru_cevaplar = ['kuvvet', 3, 1, 2, 'esnek', 0, 3, 'küre', 'yerçekimi', 2];

//var cevaplar = ["B", "D", "B"];
function display (content){
    if (content == "Matematik") {
        display_soru(math_sorular);
        display_options(math_siklar);
    } else if (content == "Fen Bilimleri") {
        display_soru(science_questions);
        display_options(science_siklar);

    } else if (content == "İngilizce" ){
        display_soru(eng_sorular);
        display_options(eng_siklar);

    }
    
    var collection = document.getElementsByClassName("active") ;
    //console.log (soru_number);
    collection[0].className = "";
    
    document.getElementById(soru_number).className = "active";

}
function set_question (val){
    // 1-10 arasi sorulara atlanabilir ya da sonraki-önceki sorulara gecilebilir
    //val 0-9 arasi ise o soruya gecis yap. val -1 ise --, 10 ise ++ yap.
    // hangi soruda ise o kutucugu active yap.
    if (val<0) {
        soru_number == 0 ? null :  soru_number--;
    } else if (val > 10 ){
        soru_number == 9 ? null : soru_number++;
        
    } else {
        soru_number=val;
    }
    display(content);
    

}


function set_answer (ans){
    // input id 0,1,2,3 = A,B,C,D seklindedir.
    // kullanicinin cevaplarini alir
    user_answers[soru_number] = ans;
    console.log(user_answers); //debugging
    //console.log(ans);
}

function display_options (siklar) {
    // input id 0,1,2,3 = A,B,C,D seklindedir.
    // print options
    answer_id.innerHTML = "";
    
    if (siklar[soru_number][0][0] == "A"){
        for (let i =0 ; i < siklar[soru_number].length ; i++){
            let checked = user_answers[soru_number] == i ? "checked" : "" ; // kullanici daha once isaretledigi kutucugu biraktigi gibi buluyor.
            answer_id.innerHTML +=  "<input type='radio' name= option onclick='set_answer("+i+")' " +checked+"> "; // kutucuk
            answer_id.innerHTML += "<label for='"+i+"' >"+ siklar[soru_number][i]  +" </label> <br>" // soru metni (label)
            }
    } else {
        let type = siklar[0][0] == 'text' ? 'text' : 'number';
        let old_answer = user_answers[soru_number] ? user_answers[soru_number] : "" ; // kullanici daha once isaretledigi kutucugu biraktigi gibi buluyor. if (user_answers[soru_number]) 
        answer_id.innerHTML +=  "<input type=' "+  type  +"' name= 'input' value='" + old_answer +"' id='input'> "; // kutucuk
        answer_id.innerHTML +=  "<input type='button' name= 'button' value='Kaydet' onclick='set_answer( get_user_input() )'> "; // kaydet butonu
        //console.log(user_answers[soru_number]);
    }
    
}
function get_user_input (){
    user_input =  document.getElementById('input').value;
    //console.log(user_input);
    return user_input;

}

function display_soru(sorular_t){
    //print question
    question_id.innerHTML = sorular_t[soru_number];

}

function end_quiz(){
    var not = 0;

    if (content == "Matematik") {
    not =calculate_quiz(math_dogru_cevaplar);
    } else if (content == "Fen Bilimleri") {
    not= calculate_quiz(science_dogru_cevaplar);
    } else if (content == "İngilizce" ){
    not =calculate_quiz(eng_dogru_cevaplar);
    }
    sessionStorage.setItem("not", not);// baska sayfaya veri aktarmak icin kulllanicaz
    sessionStorage.setItem("content", content);// baska sayfaya veri aktarmak icin kulllanicaz

}
function set_not (){
    document.getElementById("sonuc_id").innerHTML = sessionStorage.getItem('not');
   
}
function set_ders(){
   
    document.getElementById("sonuc_ders").innerHTML =  sessionStorage.getItem('content');
    
}
function calculate_quiz (kullanici_cevaplar) {
    let not = 0;
    for (let i = 0 ; i< kullanici_cevaplar.length ; i++){
        if (kullanici_cevaplar[i] == user_answers[i]) {
            not += 10;
        }
    }
    console.log("not is " +not);
    return not;
}



display(content);