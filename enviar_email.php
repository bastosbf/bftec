<?php
$nome = $_POST [nome];
$email = $_POST [email];
$msg = $_POST [msg];

$corpo = "Nome: $nome \n\nEmail: $email \n\nMensagem: $msg";

$enviado = mail ( "bftecinformatica@gmail.com", "Contato", $corpo );

if ($enviado) {
	$_POST [sucesso] = 1;
} else {
	$_POST [erro] = 1;
}
header ( "location:contato.php" );
?>