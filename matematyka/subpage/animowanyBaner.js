window.onload = rotate;

var tabObrazkow = new Array("graphics/profesjonalizm.jpg","graphics/rzetelność.jpg","graphics/indywidualne.jpg","graphics/doświadczenie.jpg","graphics/konkurencyjność.jpg");
var aktualnyObraz = 0;

var tabTekst = new Array("Inteligęcja","rzetelność","Praktyka","Czas","Geniusz");
var aktualnyTekst = 0;


//"graphics/profesjonalizm.jpg","graphics/rzetelność.jpg","graphics/indywidualne.jpg","graphics/doświadczenie.jpg","graphics/konkurencyjność.jpg"
function rotate() {
	aktualnyObraz++; 
	aktualnyTekst++; 
	if (aktualnyObraz == tabObrazkow.length) {
		aktualnyObraz = 0;
	}
	document.getElementById("baner").src = tabObrazkow[aktualnyObraz];

	if (aktualnyTekst == tabTekst.length) {
		aktualnyTekst = 0;
	}
	document.getElementById("topbarBOTTOM").innerHTML = tabTekst[aktualnyTekst];	
	
	setTimeout("rotate()", 4 * 1000);
}
