const content_headers = [
    "Doğal Sayılarla Çarpma İşlemi",
    "Doğal Sayılarla Bölme İşlemi",
    "Uzunlukları Ölçme"
];
var current_content = 0;
const contents = [
    "",
    "",
    "",
]
var content_carpma = document.getElementById("carpma");
var content_bolme = document.getElementById("bolme");
var content_uzunluk = document.getElementById("uzunluk"); // contenleri hidden yapmak için aldık

var leftheader = document.getElementById("content_header"); // sol sütuna var olan content başlıklarını yazmak
var header = document.getElementById("header"); //başlık değiştirme

display_headers();

function display_headers (){
    header.innerHTML = content_headers[current_content]; // content basligini degistirir
    //console.log(current_content);
    leftheader.innerHTML = "";

    for (let i=0 ; i< content_headers.length; i++){
        leftheader.innerHTML += "<a href='#' onclick='set_content("+i+")'>"+ content_headers[i] +"</a>"; // soldaki basliklari yazar
    }
}

set_content();
function set_content (content=0){
    // default deger olarak 0 verdik yani ilk basligi gostericek.
    // content degiskeni var olan contenti degistirir. current_content = content yapip gerekli contentleri acicaz
    // icerik 
    current_content = content;
    switch (current_content) {
        case 0:
            content_carpma.hidden = false;
            content_bolme.hidden = true;
            content_uzunluk.hidden = true;
            break;
        case 1:
            content_carpma.hidden = true;
            content_bolme.hidden = false;
            content_uzunluk.hidden = true;
            break;
         case 2:
            content_carpma.hidden = true;
            content_bolme.hidden = true;
            content_uzunluk.hidden = false;
            break;
        default:
            content_carpma.hidden = false;
            content_bolme.hidden = true;
            content_uzunluk.hidden = true;

    }
    display_headers();
    
}