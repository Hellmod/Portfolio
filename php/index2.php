  	<?php
		@$i=$_GET['id'];
	?>
<!DOCTYPE html>
<html class="" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>MARD</title>
	<meta name="description" content="Ham Radio Kit, Home Made, Ham Homodyne Kit, Ham Radio Kits">
	<meta name="keywords" content="HamHomodyne,HamHomodyne,HomeMade,kit,kits,hamkits,hamradiokit,Amateurradiohomebrew,home built">
	
	<link rel="stylesheet" type="text/css" href="subpage/style.css" />
	<link rel="shortcut icon"  href="graphics/favicon.ico" >
	<meta http-equiv="Refresh" content="100000" />
	<link href='http://fonts.googleapis.com/css?family=Alegreya&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="contener">
	<div id="TopHeder">
		<img src="graphics/logo.gif" alt="Brak obrazka" width="150px">
		<div id="TopHederRight">
			
<div id="TopHederRightButton"> <a href="index2.php?id=Promocje">Promocje</a></div>
			<div id="TopHederRightButton"> <a href="index2.php?id=Cennik"> Zapytaj o cenę</a> </div>
			<div id="TopHederRightTel">883 634 464 </div>
		</div>
	</div>
	<nav>
  	<?php

		if($i=="Home")echo '<div class="select"><a href="http://vatmar.com.pl/">Strona główna</a></div>';
		else echo '<div class="menu"><a href="index.php">Strona główna</a></div>';
		echo'<div class="MenuBorder"></div>';
		
		if($i=="O_firmie")echo '<div class="select"><a href="index2.php?id=O_firmie">O firmie</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=O_firmie">O firmie</a></div>';
		echo'<div class="MenuBorder"></div>';
		
		if($i=="Oferta")echo '<div class="select"><a href="index2.php?id=Oferta">Oferta</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Oferta">Oferta</a></div>';
		echo'<div class="MenuBorder"></div>';
				
		if($i=="Cennik")echo '<div class="select"><a href="index.php?id=Cennik">Cennik</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Cennik">Cennik</a></div>';
		echo'<div class="MenuBorder"></div>';
				
		if($i=="Promocje")echo '<div class="select"><a href="index.php?id=Promocje">Promocje</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Promocje">Promocje</a></div>';
		echo'<div class="MenuBorder"></div>';
		
		if($i=="Praca")echo '<div class="select"><a href="index.php?id=Praca">Praca</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Praca">Praca</a></div>';
		echo'<div class="MenuBorder"></div>';
		
		if($i=="Kontakt")echo '<div class="select"><a href="index.php?id=Kontakt">Kontakt</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Kontakt">Kontakt</a></div>';
	
		
	?>
	</nav>
	<header>
	
	</header>


	<main>
  		<?php

			if(!isset($i))require('subpage/Home.php');
			else 			require('subpage/'.$i.'.php');
		?>	
	</main>

	<div id="TopFooter">

			<div id="TopFooterRightButton"> <a href="index2.php?id=Promocje">Promocje</a></div>
			<div id="TopFooterRightButton"> <a href="index2.php?id=Cennik"> Zapytaj o cenę</a> </div>
	</div>
</div>
	<footer>
	<div id="contenerFooter">
		<div class="LeftFooter">
		<ul>
		<dt>Skróty:</dt>

			<li><a href="http://vatmar.com.pl/">Strona główna</a></li>
			<li><a href="index2.php?id=O_firmie">O firmie</a></li>
			<li><a href="index2.php?id=Oferta">Oferta</a></li>
			<li><a href="index2.php?id=Cennik">Ceny</a></li>
			<li><a href="index2.php?id=Promocje">Promocje</a></li>
			<li><a href="index2.php?id=Praca">Praca</a></li>
			<li><a href="index2.php?id=Kontakt">Kontakt</a></li>
		</ul>
		</div>
		<div class="LeftFooter">
		<ul>
		<dt>Obsługa klienta:</dt>

			<li><a href="index2.php?id=Promocje">Promocje</a></li>
			<li><a href="index2.php?id=Cennik">Zapytaj o cenę</a></li>
			<li><a href="mailto:proactive@interia.pl">Zgłoś problem na stronie</a></li>
		</ul>
		</div>
		<div class="RightFooter">
			<img src="graphics/logo2.gif" alt="Brak obrazka" width="150px">	</br>	
		30-427 Kraków,</br>
		ul. Ruczaj 43 lok. U2A</br>
		telefon: <font color="white">883 634 464</font></br>
		</br>

		</div>
	</div>
	</footer>
	<div id="DownFooter">
	

	Copyright © RM | Wszelkie prawa zastrzeżone
	</div>
</body>
</html>