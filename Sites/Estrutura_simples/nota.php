<?php
$nome = (string) $_GET['nome'];
$nota1 = (float) $_GET['nota1'];
$nota2 = (float) $_GET['nota2'];

$media = ($nota1+$nota2)/2;

echo "Aluno $nome a sua média foi: $media";
?>