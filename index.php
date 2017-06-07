<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"></link>	
	<title>Portfolio</title>  
	</meta>
</head>
  	<?php
		@$i=$_GET['id'];
	?>
<body>
<div id="contener">
<div id="content">
	<header>
		<div id="all"> 
		</br></br></br></br></br>
		<h1><pre>Rafał Miśkiewicz</pre></h1>
		</div> 
	</header>
	<nav>
		<div id="all"> 
			<div id="menu"><a href="index.php?id=Home">Strona główna</a></div>		
			<div id="menu"><a href="index.php?id=Java">Java</a></div>		
			<div id="menu"><a href="index.php?id=Strony">Strony www</a></div>		
			<div id="menu"><a href="index.php?id=Borland">Borland c++ Builder</a></div>		
			<div id="menu"><a href="index.php?id=Kontakt">Kontakt</a></div>		
		</div>
	</nav>
	<section>	
		<?php
			if(!isset($i))	require('subpage/Home.php');
			else 				require('subpage/'.$i.'.php');
		?>	
	</section>	

</div>
	<footer>
	<div style="float:left;">
		<script type="text/javascript" src="//rc.revolvermaps.com/0/0/3.js?i=2ttksp0we1n&amp;b=6&amp;s=0&amp;m=2&amp;cl=ffffff&amp;co=010020&amp;cd=aa0000&amp;v0=60&amp;v1=60&amp;r=1" async="async"></script>
	</div>
	<div style="float:left;">
		</br>
		&emsp;&emsp;Copyright © 2016 Rafał Miśkiewicz
	</div>
	</footer>
</div>
</body>
</html>