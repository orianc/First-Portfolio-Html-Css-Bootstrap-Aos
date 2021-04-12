
<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

$msg = "Nom:\t$InputName\n";
$msg .= "E-Mail:\t$InputEmail\n";
$msg .= "Message:\t$InputText\n\n";
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "orian.ea15@gmail.com";
$subject = "Contact from portfolio";

$mailheaders = "From: Portfolio<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?>