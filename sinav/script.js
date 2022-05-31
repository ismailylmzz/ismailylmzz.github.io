var seconds = 300;
var timer_id = document.getElementById("time");
setivt = setInterval(timer,1000);


function timer (){
    if (seconds <= 0) {
        timer_id.innerHTML = "Süre: -- : --"; 
        end_quiz();
        location.replace("sinav_sonuc.php");
    } else {
    var m = Math.floor(seconds / 60);
    var s = seconds % 60;
    if (m <= 10){
        m= "0" +m ;
    }else {

    }
    if (s <=10 ) {
        s = "0" + s;
    }
    timer_id.innerHTML = "Süre: " + m + " : " + s;
    seconds--;
    }
    

}
