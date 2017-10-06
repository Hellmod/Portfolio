<?php
$q = fopen('dane.txt', 'a');
@fwrite($q, date('d.m.Y H:i:s').' | '.$_SERVER['REMOTE_ADDR']." | ".$_SERVER['HTTP_USER_AGENT']."\r\n");
@fclose($q);
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<HTML lang="pl">
	<link rel="stylesheet" href="style2.css"></link>	
	<title>Portfolio</title>  
	</meta>
</head>
<body>
<div id="contener">
	<header>
		</br></br></br></br></br>
		<h1><pre>Rafał Miśkiewicz</pre></h1>
	</header>
	<nav>
		<div id="menu"><a href="index2.php?id=Home">Strona główna</a></div>		
		<div id="menu"><a href="index2.php?id=Java">Java</a></div>		
		<div id="menu"><a href="index2.php?id=Strony">Strony www</a></div>		
		<div id="menu"><a href="index2.php?id=Borland">Borland c++ Builder</a></div>		
		<div id="menu"><a href="index2.php?id=Kontakt">Kontakt</a></div>
		<div id="menu"><a href="index.php"><</a></div>		
	</nav>
	<div id="content">	
		<?php
				@$i=$_GET['id'];
			if(!isset($i))	require('subpage/Home.php');
			else 			require('subpage/'.$i.'.php');
		?>	
	</div>
	<footer>
		&emsp;&emsp;Copyright © 2016 Rafał Miśkiewicz
	</footer>
</div>
</body>
</html>