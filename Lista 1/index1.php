<?php

echo "<h1>Hello World</h1>";
echo"<hr>";
//CRIAÇÃO DE VARIÁVEIS
$nome = "Henrique";
$idade = 17;

echo $nome;
echo"<br>";
//CONCATENAÇÃO
if($nome === 'Henrique' and $idade === 17) {
    echo 'Seja bem vindo(a)<br>' . $nome . "<br>";
}
//FUNÇÃO
function saudacao( $nome){
    return 'Olá, '. $nome;
}
echo saudacao($nome) . "<br>";

//DEBUGANFO VARIÁVEIS
var_dump($nome, $idade);


// 1 FORMA DE CRIAR ARRAY
$arr = array(1,2,3,4,5);
//2 FORMA DE CRIAR ARRAY
$arr2 = [1,2,3,4,5];

echo "<br>";

//ENCONTRANDO UM ELEMENTO PELA POSIÇÃO
echo $arr[0] . "" . $arr2[1];

echo"<br>";

foreach($arr2 as $number){
    echo $number . "<br>";
}

//{
//      chave: valor
//}


?>