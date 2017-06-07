<div id="TopMain">
</div>
<h3>Przykładowe ceny usług księgowych</h3>
<ol>
<li>Rachunkowość (księgi handlowe) - od  250 pln</li>
<li>Księga przychodów i rozchodów -  od  70 pln</li>
<li>Ryczałt od przychodów ewidencjonowanych - od 50 pln</li>
</ol>

Powyższe ceny stosuje się gdy firma nie zatrudnia pracowników, a liczba dokumentów nie przekracza 10 szt. miesięcznie.
</br></br>
Przedstawione powyżej ceny mają charakter orientacyjny i dotyczą usług kompleksowych świadczonych na podstawie umów o stałej współpracy. Oferowane przez Biuro Rachunkowe VatMar  Kraków ceny na usługi księgowe uzależnione są od czynników decydujących o wielkości nakładów pracy niezbędnych do ich realizacji. Ceny podane są w kwotach netto.
</br></br>
<b style="font-size: 100%;">Jeśli jednak powyższe dane nie są dla Państwa wystarczające, prosimy wysłać zapytanie na nasz  <a href="mailto:proactive@interia.pl">adres mailowy</a> zamieszczając w nim następujące informacje:</b>
<ul>
<li>forma prawna firmy (np. firma jednoosobowa, spółka jawna, spółka z o.o.);</li>
<li>rodzaj prowadzonej działalności (np. produkcja, handel, usługi);</li>
<li>ilość zatrudnionych pracowników (umowa o pracę, umowa zlecenie/o dzieło);</li>
<li>średnia liczba dokumentów w miesiącu (faktury sprzedaży/kosztowe);</li>
<li>forma opodatkowania (zasady ogólne, podatek liniowy, ryczałt);</li>
<li>podlega/nie podlega VAT;</li>
<li>informacje dodatkowe - według uznania. </li>
</ul>
Odpowiedź na przesłane zapytanie o cenę zostanie dostarczona na Państwa adres mailowy, najpóźniej w ciągu dwóch dni roboczych.

<?php

if (count($_POST))
{
	$email = 'poczta@rafalmiskiewicz.pl';
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

/*-------------*/
<section id="kontakt" class="fiveth wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
	<div class="form">
<form method="POST" action="">
		<span ><input name="your_name" size="40" aria-required="true" aria-invalid="false" placeholder="Imię i nazwisko" type="text"></span><br>
		
		<span ><input name="your_email" size="40"  aria-required="true" aria-invalid="false" placeholder="Adres email" type="email"></span><br>
		
		<span ><input name="tel" size="40"  aria-required="true" aria-invalid="false" placeholder="Telefon kontaktowy" type="text"></span><br>
		
		<span ><textarea name="your_message" cols="40" rows="10"  aria-invalid="false" placeholder="Treść wiadomości"></textarea></span><br>

		<input value="Wyślij wiadomość"  type="submit">
</form>	
	</div>
</section>

<?php
}
?>