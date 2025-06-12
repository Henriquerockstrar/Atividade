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

?>