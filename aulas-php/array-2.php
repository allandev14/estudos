<?php
//Continuação de Array
//Com o comando do count podemos ver o valor dentro de uma variável

$herois = ["homem-aranha", "homem-de-ferro", "Visão"];
print_r($herois);
echo "<br />";
echo "<hr />";

echo count($herois);
echo "<br />";
echo "<hr />";

$frutas = ["Abiu", "Açaí", "Amêndoa", "Araçá", "Babaçu", "Bacuri"];
print_r($frutas);
echo "<br />";
echo "<hr />";

$totaldefrutas =  count($frutas);
echo $totaldefrutas;
echo "<br />";
echo "<hr />";

$xadrez = ["Rei", "Rainha", "Torres", "Bispos", "Cavalos", "Peões", "Dama"];
print_r($xadrez);
echo "<br />";
echo "<hr />";

$jogodeacademico = count($xadrez);
echo $jogodeacademico;

