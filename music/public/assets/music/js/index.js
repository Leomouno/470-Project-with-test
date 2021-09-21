var audio= document.getElementById('audio');
var playNowBtn=document.getElementById('playNowBtn');
var count=0;
function playPause(){
  if(count==0){
    count=1;
    audio.play();
    playNowBtn.innerHTML="Pause &#9208";
  }
  else{
    count=0;
    audio.pause();
    playNowBtn.innerHTML="Play &#9658";
  }
}
