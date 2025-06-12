<?php
$nota1 = 5.3;
$nota2 = 5.3;
$nota3 = 5.3;

$media = ($nota1 + $nota2 + $nota3) /3;

if ($media < 7) {
   echo"Sua media é " . $media . ", você foi reprovado";
}
else {
    echo"Sua media é " . $media . ", você foi aprovado";
}
?>