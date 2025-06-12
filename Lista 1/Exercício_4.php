<?php
//Calculadora de Desconto
echo"<h1>Calculadora de Desconto</h1>";
$preco = 23;
$desconto = 2;

$resultado = ($preco * $desconto) / 100;
$total = $preco - $desconto;
echo "O valor do desconto é " . $resultado;
?>