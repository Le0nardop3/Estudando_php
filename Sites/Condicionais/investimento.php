<?php
$tipo = (float) $_POST['tipo'];
$valor = (float) $_POST['valor'];

echo "<h1>Resultado:</h1>";
echo "O valor investido foi de R$ $valor, no tipo de investimento: $tipo <br>";

if ($tipo == 1) {
    $rendimento = $valor*(3/100);
}elseif ($tipo == 2) {
    $rendimento = $valor*(4/100);
}

echo "O rendimento mensal será de R$ $rendimento <br>";
echo "Nos proximos 6 meses o saldo na conta sera de:<br>";

for ($i=1; $i <= 6 ; $i++) { 
if ($tipo == 1) {
    $rendimento = $valor*(3/100);
}elseif ($tipo == 2) {
    $rendimento = $valor*(4/100);
}

$valor += $rendimento;

echo "mes $i = R$ $valor <br>";
}

?>