<?php

$Lista = [
   "Produto1" => [
    "preco" => 80,

],
"Produto2" => [
    "preco" => 99
],
"Produto3"=> [
   "preco" => 100
]
];
foreach($Lista as $Listachave => $Listapreco) {   
     echo "Produto: " . $Listachave ."<br>";
    echo "Preço: " . $Listapreco['preco'] . "<br>";
}


?>