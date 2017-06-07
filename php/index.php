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
	<link href='http://fonts.googleapis.com/css?family=Amiko&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="subpage/animowanyBaner.js"></script>
</head>

<body onload="rotate();">
<div id="test">
<div id="contener">
	<div id="TopHeder">
		<img src="graphics/logo.gif" alt="Brak obrazka" width="150px">
		<div id="TopHederRight">
			
			<div id="TopHederRightButton"> <a href="index2.php?id=Promocje">Promocje</a></div>
			<div id="TopHederRightButton"> <a href="index2.php?id=Cennik"> Zapytaj o cenę</a> </div>
			<div id="TopHederRightTel">+48 883 634 464 </div>
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
	
</div>	
		<div id="topbar">
			<div id="topbarUP">
				<img alt="brak obrazka" src="..." width="100%" height="100%" id="baner">
				
			</div> 
			<div id="topbarBOTTOM">	</div>
			
		</div>
	<div id="content">
		<div class="LeftContent">
		<h2>Dlaczego my?</h2>
		Jesteśmy licencjonowanym biurem rachunkowym działającym na podstawie świadectwa
		kwalifikacji Ministerstwa Finansów nr 23462/2008 oferującym pełen zakres usług na terenie Krakowa i okolic. Posiadamy:
		
			<ul>
			<li><a href="#">Doświadczenie i wiedzę</a></li>
			<li><a href="#">Licencję zawodową i ubezpieczenie</a></li>
			<li><a href="#">Nowoczesny sprzęt i oprogramowanie</a></li>
		</ul>
		<div class="myButton"><a href="index2.php?id=O_firmie">Czytaj więcej</a></div>
		</div>
		
		<div class="LeftContent">
		<h2>Oferta</h2>
		<ul>	
			<li><a href="#">księgi rachunkowe</a></li>
			<li><a href="#">księgi przychodów i rozchodów</a></li>
			<li><a href="#">ryczałt ewidencjonowany</a></li>
			<li><a href="#">podatek od towarów i usług VAT</a></li>
			<li><a href="#">obsługa kadrowo-płacowa</a></li>
			<li><a href="#">rozliczenia ZUS</a></li>
			<li><a href="#">zeznania podatkowe</a></li>
		</ul>
		<div class="myButton"><a href="index2.php?id=Oferta">Czytaj więcej</a></div>
		</div>
		<div class="LeftContent">
		<h2>Dane teleadresowe</h2>
		
		<pre>
		VatMar Sp. z o.o.
		Biuro Rachunkowe
		ul. Ruczaj 43 lok. U2A
		30-409 Kraków
		kom. +48 883 634 464
		Email: biuro@harmann.com.pl
		vatmar@op.pl
</pre>

		<div class="myButton"><a href="index2.php?id=Kontakt">Czytaj więcej</a></div>
		</div>
	</div>

	<div id="TopFooter">

			<div id="TopFooterRightButton"> <a href="index2.php?id=Promocje">Promocje</a></div>
			<div id="TopFooterRightButton"> <a href="index2.php?id=Cennik"> Zapytaj o cenę</a> </div>
	</div>
	<footer>
	<div id="contenerFooter">
		<div class="LeftFooter">
		<ul>
		<dt>Skróty:</dt>

			<li><a href="http://vatmar.com.pl/">Strona główna</a></li>
			<li><a href="index2.php?id=O_firmie">O firmie</a></li>
			<li><a href="index2.php?id=Oferta">Oferta</a></li>
			<li><a href="index.php?id=Cennik">Ceny</a></li>
			<li><a href="index.php?id=Promocje">Promocje</a></li>
			<li><a href="index.php?id=Praca">Praca</a></li>
			<li><a href="index.php?id=Kontakt">Kontakt</a></li>
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
</div>
</body>
</html>