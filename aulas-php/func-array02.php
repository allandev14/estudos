<?php

/* 
array_udiff — Computa a diferença de arrays usando uma 
função de callback para comparação dos dados
*/

$frutas = array("maça", "uva", "tomate");
print_r($frutas);
echo "<br/>";
array_unshift($frutas, "pera", "amora", "jaca");
echo "<br/>";
print_r($frutas);
echo "<br/> <hr/>";

//Exemplo 2 de array_undiff

$carro = array("porta", "roda", "lataria");
print_r($carro);
echo "<br/> <br/>";
array_unshift($carro, "banco", "volante", "motor");
echo "<br/>";
print_r($carro);
echo "<br/> <hr/>";

//array_pop — Extrai um elemento do final do array

$a1 = array("gato", "cachorro", "pato");
print_r($a1);
echo "<br/>";
echo array_pop($n1);
echo "<br/>";
print_r($n1);

echo "<br/> <hr/>";

//Exemplo de array_pop 2

$a2 = array("passaro", "casa", "porteira");
print_r($a2);
echo "<br/>";
echo array_pop($a2);
echo "<br/> <hr/>";
print_r($a2);
echo "<br/> <hr/>";

//array_shift — Retira o primeiro elemento de um array

$a3 = array("cachorro", "pato", "papagaio");
print_r($a3);
echo "<br> <hr>";
echo array_shift($a3);
echo "<br><br>";
print_r($a3);
echo "<br/> <hr/>";

//array_push — Adiciona um ou mais elementos no final de um array
$a4 = array("violão", "corda", "braço");
print_r($a4);
echo"<br>";
echo array_push($a4, "cavalete", "palheta");
echo "<br>";

$a5 = array("escola", "cadeira", "borracha", "lapis", "caderno");
print_r($a5);
echo "<br/>";
echo array_push($a5, "mochila", "escolar", "professora");
echo "<br/> <hr/>";

//array_combine — Cria um array usando um array para chaves e outro para valores

$campeonato = array("Campeão", "vice", "Terceiro");
$times = array("Cruzeiro", "America", "Atletico-MG");

$brasileiro = array_combine($campeonato, $times);
print_r($brasileiro);

echo "<br/> <hr/>";

//Exemplo 2

$moeda = array("real", "dolar", "euro");
$bolsadevalores = array("Brasil", "Estados-Unidos", "Alemanha");

$valor = array_combine($moeda, $bolsadevalores);
print_r($valor);

echo "<br/> <hr/>";

$a = array(2,1,1);
echo array_sum($a);
echo "<br/> <hr/>";
