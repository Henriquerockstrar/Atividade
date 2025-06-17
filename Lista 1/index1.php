<?php

//IMPORTAÇÃO DE ARQUIVOS
require 'helpers.php';
echo "<hr>";

echo validarEnderecoEmail('macedohenrique322@gmail.com');
// echo validarEnderecoEmail('https://google.com');
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

//PHPdocs

/**
 * 
 * Função de saudação
 * @param string $nome Nome do usuário
 * @return string mensagem de saudação com o nome do usuário
 * @author Henrique <macedohenrique322@gmail.com>
 */

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