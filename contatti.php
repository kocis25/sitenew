<?php
if (isset ($_POST["submit"]))
{
$nome=trim( strip_tags($_POST["nome"]));
$email=trim( strip_tags($_POST["email"]));
$messaggio=trim( strip_tags($_POST["messaggio"]));

$header = "From $email" . "a nome di $nome";
$subject = "Emai ldel form di percorsi a colori"
$indirizzo = "lisim.ros@hotmail.it"


if(mail($indirizzo, $subject, $messaggio, $header)){
echo "Email inviata correttamente";
}
else{
echo "Errore nell'invio della mail";
 }
}
?>