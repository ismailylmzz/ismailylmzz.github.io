const content_headers = [
    "Yer Kabuğu",
    "Dünyamızın Haraketleri",
    "Kuvvetin Etkileri"
]
var current_content = 0;

var content_yer_kabugu = document.getElementById("yer_kabugu");
var content_kuvvet = document.getElementById("kuvvet");
var content_dunya = document.getElementById("dunya"); // contenleri hidden yapmak için aldık

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
            content_yer_kabugu.hidden = false;
            content_dunya.hidden = true;
            content_kuvvet.hidden = true;
            break;
        case 1:
            content_yer_kabugu.hidden = true;
            content_dunya.hidden = false;
            content_kuvvet.hidden = true;
            break;
         case 2:
            content_yer_kabugu.hidden = true;
            content_dunya.hidden = true;
            content_kuvvet.hidden = false;
            break;
        default:
            content_yer_kabugu.hidden = false;
            content_dunya.hidden = true;
            content_kuvvet.hidden = true;
    }
    display_headers();
    
}
