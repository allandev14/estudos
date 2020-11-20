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

