<?php

// Figuras de repetição While e Do While
// While e do While | Enquanto  

$contador = 1;
while ($contador <= 10):
    echo "Contador é $contador <br/>";
    $contador++;
endwhile;
echo "<br/> <hr/>";

//Exemplo 2 

$hora = 1;
while ($hora <= 59):
    echo "Agora são 12:$hora <br>";
    $hora++;
endwhile;
echo "<br/> <hr/>";

// Exemplo 3
 $segundos = 1;
 do {

    echo "Número $segundos <br/>";
    $segundos++;
}   while ($segundos <= 60);