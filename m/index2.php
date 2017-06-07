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


<form action="?" method="post"  >
  <p>Pytania? opinie?  ...  napisz. <br>
	Jeśli chcesz odpowiedź - podaj swój email, lub telefon.</p>
  <textarea name="Komentarz_1" cols="50" rows="10"></textarea>
  <br />
  <br />
  <br />
  <input type="submit" value="        Wyślij        " />
</form>



<?php
}
?>


