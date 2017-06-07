<?php
	if(strpos($_SERVER['HTTP_USER_AGENT'], "Android"))
		echo'Telefon';
	else
		echo'Komputer'
?>