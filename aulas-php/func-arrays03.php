<?php

//array_sum — Calcula a soma dos elementos de um array

//somá entre 2 números

$a1 = array(30,20,);
echo array_sum($a1);
    echo "<br/>";

$a2 = array(2,32,45,90);
echo array_sum($a2);
    echo "<br/>";

$a3 = array(3,6,10,5);
echo array_sum($a3);
    echo "<br/>";

$a4 = array(2,5,4,10);
echo array_sum($a4);
    echo "<br/>";

$soma = array(25,2,5);
echo array_sum($soma);
    echo "<br>";

// Outra forma de apresentar resultado variável sum

$soma1 = array(5.3,8,9,1,2);
$total = array_sum($soma1);

echo array_sum($soma1);
    echo "<br/>";

// array_explode — Divide uma string em strings

$data = "25/12/2020";
$novaData = explode("/", $data);
    print_r($novaData);
    echo "<br>";

$data1 = "12/12/2303";
$novadata1  = explode("/", $data1);
    print_r($novadata1);
    echo "<br> <hr>";

$frases  = "Olá mundo";
$escreva = explode(" ", $frases);
    print_r($escreva);
    echo "<br/>";

$frases2 = "Como pedir coroas a um rei que da glória se despiu";
$escreva2 = explode(" ", $frases2);
    print_r($escreva2);
    echo "<br/>";