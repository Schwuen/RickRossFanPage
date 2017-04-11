var bioTrigger = document.getElementById("bioTrigger");
var musicTrigger = document.getElementById("musicTrigger");
var bioDiv = document.getElementById("bio");
var musicDiv = document.getElementById("musicDiv");
var music = document.getElementById("music");
var pause = document.getElementById("pause");
var devil = document.getElementById("devil");
var iThink = document.getElementById("iThink");
var hustlin = document.getElementById("hustlin");
var trap = document.getElementById("trap");
var block = document.getElementById("block");
var hold = document.getElementById("hold");


expand(bioTrigger, bioDiv);
expand(musicTrigger, musicDiv);
change(devil, music, "img/devil.mp3");
change(iThink, music, "img/RickRoss.mp3");
change(hustlin, music, "img/RickRoss-Hustlin.mp3");
change(trap, music, "img/RickRoss-TrapTrapTrapftYoungThug,Wale.mp3");
change(block, music, "img/RickRoss-BuyBacktheBlock.mp3");
change(hold, music, "img/RickRoss-HoldMeBack.mp3");

pause.addEventListener("click", function (ev) {
	ev.preventDefault();
	
	if (music.paused) {
		music.play();
	} else {
		music.pause();
	}
});

function expand (trigger, item) {
	trigger.addEventListener("click", function (ev) {
		ev.preventDefault();
		
		item.classList.toggle("toggle");
		this.classList.toggle("active");
	});
}

function change (trigger, music, link) {
	trigger.addEventListener("click", function (ev) {
		ev.preventDefault();
		
		music.setAttribute("src", link);
		music.play();
	});
}