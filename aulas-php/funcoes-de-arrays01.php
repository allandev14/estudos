<?php

// array_values — Retorna todos os valores de um array

$nomes = array("Prima"=>"Amanda", "Vizinha"=>"Carla", "Amiga"=> "Joana");
    $values = array_values($nomes);
    print_r($nomes);

    echo "<br/> <br/>";

//Exemplo de aray_vlaues 2
$animal  = array("Terrestre"=>"Leão", "voador"=>"falcão", "Marinho"=>"tartaruga");
    $values = array_values($animal);
    print_r($animal);
    
    echo "<br/><br/>";

//array_merge — Combina um ou mais arrays
$carro = array("Camaro", "Gol", "Ferrari");
$casa = array("mesa", "cadeira", "sofá");

    $habitacao = array_merge($carro, $casa);    
    print_r($habitacao);

        echo "<br/><br/>";

//Segundo exemplo sobre array_merge
$n1 =array("10", "11", "12", "13", "14");
$n2 = array("1","2","3", "4", "5", "6");

    $soma = array_merge($n1, $n2);
    print_r($soma);

        echo "<br/><br/>";

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
echo "<br/>";

