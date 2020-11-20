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

        echo "<br><br>";
