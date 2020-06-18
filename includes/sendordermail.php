<?php
/*require_once "Mail/Mail.php";

$from = stripcslashes($_POST['name']) . " " . stripcslashes($_POST['surename']);
$to = "obchod@axis-distribution.eu";
$subject = "Cenová Ponuka - ElioKasa Web";
$body = "Meno:" . stripcslashes($_POST['name']) . " " . stripcslashes($_POST['surename']) . "\nDruh: " . stripcslashes($_POST['type']) . "\n" . stripcslashes($_POST['msg']);

$host = "ssl://mail13.hostmaster.sk";
$port = "465";
$username = "webform@elio-kasa.eu";
$password = "WebforM20";

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
 'port' => $port,
 'auth' => false,
 'username' => $username,
 'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Cenová Ponuka bola úspešne odoslaná !</p>");
}*/

$to = "obchod@axis-distribution.eu";
$subject = "Cenová Ponuka - ElioKasa Web";
$txt = "Meno: " . stripcslashes($_POST['name']) . " " . stripcslashes($_POST['surename']) . "\nDruh: " . stripcslashes($_POST['type']) . "\n" . stripcslashes($_POST['msg']);
$headers = "From: webform@axis-distribution.eu" . "\r\n";

if(mail($to,$subject,$txt,$headers)) {
	echo "<script>
		alert('Žiadosť o cenovú ponuku bola úspešne odoslaná !');
		window.history.back();
		</script>";
} else {
	echo "<script>
		alert('Pri odosielaní žiadosti o cenovú ponuku sa vyskytla chyba !');
		window.history.back();
		</script>";
}