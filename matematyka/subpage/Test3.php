<body onload="start()">
               <h3>Kalkulator</h3>
			   podaj zakres:
			   <form action="" name="zakres">
				  od<input type="text" name="od">
				  do<input type="text" name="do">
				  <input type="button" value="OK" id="OK" onClick="zmien()">
				</form>
			   </br>
			   <samp id="liczba1"></samp>&emsp;+ &emsp;
			   <samp id="liczba2"></samp>=

        <form action="" name="test">
              <input type="text" name="wynik">
              <input type="button" value="sprawdź" id="sprawdź" onClick="sprawdz()">

        </form>
		Twój wynik:<samp id="punkty"></samp>

        <script>
	var liczba1=0;
	var liczba2=0;
	var punkty=0;
	var zakres1=0;
	var zakres2=10;
function zmien(){
	zakres1=document.zakres.od.value;
	zakres2=document.zakres.do.value;
}
	
function start(){
	liczba1=rand( zakres1, zakres2 );
	liczba2=rand( zakres1, zakres2);
	document.getElementById("liczba1").innerHTML=liczba1;
	document.getElementById("liczba2").innerHTML=liczba2;
	document.getElementById("punkty").innerHTML=punkty;
	
}



function sprawdz(){
	if(liczba1+liczba2==document.test.wynik.value){
		//alert('Dobrze');
			punkty++;
	}
	else {
		//alert("Źle");
		punkty--;
	}
	
	
		start();
}



function rand( min, max ){
    min = parseInt( min, 10 );
    max = parseInt( max, 10 );

    if ( min > max ){
        var tmp = min;
        min = max;
        max = tmp;
    }

    return Math.floor( Math.random() * ( max - min + 1 ) + min );
}
        </script>
    </body>