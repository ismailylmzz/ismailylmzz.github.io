const content_headers = [
    "Nationallity",
    "Free Time",
    "Jobs"

];
var current_content = 0;

var content_nation = document.getElementById("nation");
var content_free_time = document.getElementById("free_time");
var content_jobs = document.getElementById("jobs"); // contenleri hidden yapmak için aldık

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
            content_nation.hidden = false;
            content_free_time.hidden = true;
            content_jobs.hidden = true;
            break;
        case 1:
            content_nation.hidden = true;
            content_free_time.hidden = false;
            content_jobs.hidden = true;
            break;
         case 2:
            content_nation.hidden = true;
            content_free_time.hidden = true;
            content_jobs.hidden = false;
            break;
        default:
            content_nation.hidden = false;
            content_free_time.hidden = true;
            content_jobs.hidden = true;

    }
    display_headers();
    
}