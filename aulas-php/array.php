<?php
// Estudos de Array no PHP
// Exemplo de impressão usando carros 

$carro1 = "Volvo 850 ";
$carro2 = "Mercedes-Benz 450";
$carro3 = "Aston Martin Rapide";
$carro4 = "Rolls-Royce Corniche";

echo $carro1;
echo "<br />";
echo "<hr />";

echo $carro2;
echo "<br />";
echo "<hr />";

echo $carro3;
echo "<br />";
echo "<hr />";

echo $carro4;
echo "<br />";
echo "<hr />";

$animes = array("Naruto Uzumaki", "<br />", "Goku", "<br />", "Hinata Hyuga", "<br />", "Sakura Haruno");
print_r ($animes);
echo "<br />";
echo "<hr />";

$naruto = array(20=>"Naruto Uzumaki", 15=>"Hinata Hyuga");
echo $naruto[20];
echo "<br />";
echo "<hr />";
echo $naruto[15];
echo "<br />";
echo "<hr />";
$desenhos = array(11=>"Naruto Uzumaki", 16=>"Hinata Hyuga");
$desenhos[] = "Sasuke Uchiha";
print_r($desenhos);
echo "<br />";
echo "<hr />";

// Outra forma de se criar uma array

$distros = array();
$distros[] = "Ubuntu";
$distros[] = "Mint";
$distros[] = "Fedora";
$distros[5] = "POP-OS";

print_r($distros);
echo "<br />";
echo "<hr />";

echo $distros[5];
echo "<br />";
echo "<hr />";

echo $distros[2];
echo "<br />";
echo "<hr />";

echo $distros[1];
echo "<br />";
echo "<hr />";

echo $distros[0];
echo "<br />";
echo "<hr />";


$herois = ["Homem-de-ferro", "Homem-aranha", "Capitão-America"];
print_r($herois);
echo "<br />";
echo "<hr />";
