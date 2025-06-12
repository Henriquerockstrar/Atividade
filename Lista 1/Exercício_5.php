<?php
$pontos = 100;

$ganhou = 20;
$perdeu = 15;

$venceu = $pontos + $ganhou;
$derrotado = $pontos - $perdeu;

echo"Sua pontuação é " . $venceu . " Parabéns você venceu";
echo "<br>";
echo "Sua pontuação é " . $derrotado . " Perdeu, tente mais uma vez";

?>