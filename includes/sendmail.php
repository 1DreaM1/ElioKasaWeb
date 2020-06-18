<?php
/*require_once "Mail/Mail.php";

$from = stripcslashes($_POST['email']);
$to = "obchod@axis-distribution.eu";
$subject = stripcslashes($_POST['subject']);
$body = "Meno" . stripcslashes($_POST['name']) . "\n" . stripcslashes($_POST['msg']);

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
 'auth' => true,
 'username' => $username,
 'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Správa bola úspešne odoslaná !</p>");
}*/

$to = "obchod@axis-distribution.eu";
$subject = stripcslashes($_POST['subject']);
$txt = "Meno: " . stripcslashes($_POST['name']) . "\n" . stripcslashes($_POST['msg']);
$headers = "From: ". stripcslashes($_POST['email']) . "\r\n";

if(mail($to,$subject,$txt,$headers)) {
	echo "<script>
		alert('Správa bola úspešne odoslaná !');
		window.history.back();
		</script>";
} else {
	echo "<script>
		alert('Pri odosielaní správy sa vyskytla chyba !');
		window.history.back();
		</script>";
}
?>