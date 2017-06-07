<body>
               <h3>Kalkulator</h3>
        <form action="" name="kalkulator3">
            <fieldgroup>
              <input type="text" name="l1">
 
               <input type="text" name="l2">
         </fieldgroup>
         <filedgroup>
              <input type="button" value="+" id="suma" onClick="dzialanie2(this.value)">
                <input type="button" value="-" id="roznica" onClick="dzialanie2(this.value)">
             <input type="button" value="*" id="iloczyn" onClick="dzialanie2(this.value)">
             <input type="button" value="/" id="iloraz" onClick="dzialanie2(this.value)">
          </filedgroup>
        </form>
<div id="wynik"></div>
        <script>
function dzialanie(operacja){
 
   var l1=document.kalkulator3.l1.value ;
   var l2=document.kalkulator3.l2.value;
 
   if (operacja=='+') var suma = parseInt(l1) + parseInt(l2);
   else if (operacja=='-') var suma = parseInt(l1) - parseInt(l2);
   else if (operacja=='*') var suma = parseInt(l1) * parseInt(l2);
   else if (operacja=='/') var suma = parseInt(l1) / parseInt(l2);
 
   
   return(suma);
}
 
function wynikMod(wynik){
   document.getElementById("wynik").innerHTML="<strong>Wynik działania </strong>"+wynik;
}
 
function dzialanie2(operacja){
//Funkcja, która  składa się z 2 innych
//W ten sposób można jednolicie wykonać kilka funkcji w jednej instrukcji
 
   wynikMod(dzialanie(operacja));
}
        </script>
    </body>