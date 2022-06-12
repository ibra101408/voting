if(localStorage.getItem("count_timer")){
    var count_timer = localStorage.getItem("count_timer");
} else {
    var count_timer = 60*1.0;
}
var minutes = parseInt(count_timer/60);
var seconds = parseInt(count_timer%60);
function countDownTimer(){
    if(seconds < 10){
        seconds= "0"+ seconds ;
    }if(minutes < 10){
        minutes= "0"+ minutes ;
    }
   // document.getElementById("time").innerHTML = "Time Left : " +minutes+":"+seconds+" Seconds";
   document.getElementById("timeM").innerHTML = minutes+":";
    document.getElementById("timeS").innerHTML = seconds;

    if(count_timer <= 0){
        localStorage.clear("count_timer");
        //hiding timer and voting possibility//
        const box = document.getElementById('voting');
        box.style.visibility = 'hidden';
        const min = document.getElementById('timeM');
        min.style.visibility = 'hidden';
        const sec = document.getElementById('timeS');
        sec.style.visibility = 'hidden';
        
        [].forEach.call(document.querySelectorAll('.voting'), function (el) {
          el.style.visibility = 'hidden';
        });
         
       
         //alert("Your time is up! Thank you!"); working
         
    } else {
        count_timer = count_timer -1 ;
        minutes = parseInt(count_timer/60);
        seconds = parseInt(count_timer%60);
        localStorage.setItem("count_timer",count_timer);
        setTimeout("countDownTimer()",1000);
    }
}
setTimeout("countDownTimer()",1000);