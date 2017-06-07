<?php

if (count($_POST))
{
	$email = 'rafalmiskiewicz9@gmail.com';
	$subject = 'Formularz z Krakowa.';
	$message = 'Dziękujemy za wysłanie formularza.';
	$error = 'Wystąpił błąd podczas wysyłania formularza';
	$charset = 'iso-8859-2';
	
	$head =
		"MIME-Version: 1.0\r\n" .
		"Content-Type: text/plain; charset=$charset\r\n" .
		"Content-Transfer-Encoding: 8bit";
	$body = '';
	foreach ($_POST as $name => $value)
	{
		if (is_array($value))
		{
			for ($i = 0; $i < count($value); $i++)
			{
				$body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value[$i]) : $value[$i]) . "\r\n";
			}
		}
		else $body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value) : $value) . "\r\n";
	}
	echo mail($email, "=?$charset?B?" . base64_encode($subject) . "?=", $body, $head) ? $message : $error;
}
else
{
?>


<form method="POST" action="">
		<span ><input name="your_name" size="40" aria-required="true" aria-invalid="false" placeholder="Imię i nazwisko" type="text"></span><br>
		
		<span ><input name="your_email" size="40"  aria-required="true" aria-invalid="false" placeholder="Adres email" type="email"></span><br>
		
		<span ><input name="tel" size="40"  aria-required="true" aria-invalid="false" placeholder="Telefon kontaktowy" type="text"></span><br>
<input value="Wyślij wiadomość"  type="submit">
</div>
<div style="float: right;">
		
		<span ><textarea name="your_message" cols="40" rows="8"  aria-invalid="false" placeholder="Treść wiadomości"></textarea></span><br>
</div>
		

</form>	



<?php
}
?>


