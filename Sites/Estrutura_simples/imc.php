<?php
$peso = (float) $_POST['peso'];
$altura = (float) $_POST["altura"];

$imc = $peso/($altura*$altura);

echo "<h1>Seu imc é: $imc</h1>"

?>