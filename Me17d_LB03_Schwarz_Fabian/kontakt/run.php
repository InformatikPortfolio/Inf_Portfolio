<?php

header('Content-Type: text/html; charset=UTF-8');

$name = $_GET['anrede'];
$fullname = $_GET['fullname'];
$email = $_GET['email'];
$description = $_GET['description'];
$sprache = $_GET['language'];

echo $name;
echo $fullname;
echo $email;
echo $description;
echo $sprache;
	
$empfanger ="fabian.schwarz@tannat.ch";
$empfanger2 = "$email";
$betreff = "Kontaktanfrage von deiner Website";
$betreff2 = "Vielen Dank für Ihre Nachricht";
$nachricht = "$fullname hat dir eine Nachricht mit folgendem Inhalt geschrieben: $description. \n Bitte deine Antwort in folgender Sprache verfassen: $sprache";
$nachricht2 = "Sehr geehrte/r $name $fullname, \n Ich habe ihre Nachricht erhalten und werde Ihnen so bald wie möglich Antworten";

mail($empfanger, $betreff, $nachricht);

mail($empfanger2,$betreff2,$nachricht2)

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nachricht versandt</title>
</head>

<body>
	
	<h1>Ihre Nachricht wurde erfolgreich versandt</h1>
	
	
	
</body>
</html>