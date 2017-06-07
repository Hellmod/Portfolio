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
			
			<div id="TopHederRightButton"> <a href="index2.php?id=Test">Lorem ipsum</a></div>
			<div id="TopHederRightButton"> <a href="index2.php?id=Test"> Lorem ipsum</a> </div>
			<div id="TopHederRightTel">+00 000 000 </div>
		</div>
	</div>
	<nav>
  	<?php

		if($i=="Home")echo '<div class="select"><a href="http://vatmar.com.pl/">Strona główna</a></div>';
		else echo '<div class="menu"><a href="index.php">Strona główna</a></div>';
		echo'<div class="MenuBorder"></div>';
		
		if($i=="Kalkulator")echo '<div class="select"><a href="index2.php?id=Kalkulator">Kalkulator</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Kalkulator">Kalkulator</a></div>';
		echo'<div class="MenuBorder"></div>';
		
		if($i=="Test")echo '<div class="select"><a href="index2.php?id=Test">Test mnożenia</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Test">Test mnożenia</a></div>';
		echo'<div class="MenuBorder"></div>';
				
		if($i=="Test2")echo '<div class="select"><a href="index.php?id=Test2">Test odejmowania</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Test2">Test odejmowania</a></div>';
		echo'<div class="MenuBorder"></div>';
				
		if($i=="Test3")echo '<div class="select"><a href="index.php?id=Test3">Test dodawania</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Test3">Test dodawania</a></div>';
		echo'<div class="MenuBorder"></div>';
		
		if($i=="Inne")echo '<div class="select"><a href="index.php?id=Inne">Inne</a></div>';
		else echo '<div class="menu"><a href="index2.php?id=Inne">Inne</a></div>';
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
		<h2>Dlaczego matma?</h2>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		
			<ul>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
		</ul>
		<div class="myButton"><a href="index2.php?id=Test">Czytaj więcej</a></div>
		</div>
		
		<div class="LeftContent">
		<h2>Ciekawostki</h2>
		<ul>	
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
		</ul>
		<div class="myButton"><a href="index2.php?id=Test">Czytaj więcej</a></div>
		</div>
		<div class="LeftContent">
		<h2>Dane Kontaktowe</h2>
		
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 


		<div class="myButton"><a href="index2.php?id=Test">Czytaj więcej</a></div>
		</div>
	</div>

	<div id="TopFooter">

			<div id="TopFooterRightButton"> <a href="index2.php?id=Test">Promocje</a></div>
			<div id="TopFooterRightButton"> <a href="index2.php?id=Test"> Zapytaj o cenę</a> </div>
	</div>
	<footer>
	<div id="contenerFooter">
		<div class="LeftFooter">
		<ul>
		<dt>Skróty:</dt>

			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>

		</ul>
		</div>
		<div class="LeftFooter">
		<ul>
		<dt>Adnotacje:</dt>

			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
			<li><a href="#">Lorem ipsum</a></li>
	
		</ul>
		</div>
		<div class="RightFooter">
			<img src="graphics/logo2.gif" alt="Brak obrazka" width="150px">	</br>	
<a href="#">Lorem ipsum</a>
<a href="#">Lorem ipsum</a>
<a href="#">Lorem ipsum</a>
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