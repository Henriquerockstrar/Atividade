<?php
$preco = array(1,2,3,4,50);
$soma = 0;

foreach ($preco as $total){
    $soma = $soma + $total;

}
echo "O total da compra: " . $soma;


?>