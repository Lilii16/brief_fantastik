var audio = document.getElementById("myAudio");

var btn = document.getElementById("btnAudio");

 

function pauseAndPlay () {

if (audio.paused) {

audio.play();

btn.innerHTML = "Play ▶";

} else {

audio.pause();

btn.innerHTML = "Pause II, click to play again";

}

}
