<?php

// For | Foreach Significa | Para

// Exemplo com horas

for ($timer = 0; $timer <= 59; $timer++):
    echo "Agora são 12hs e $timer.s<br>";
endfor;
echo "<br/> <hr/>";

// Exemplo de tabuada

for ($tabuada = 0; $tabuada <=10; $tabuada++):
    echo "3 x $tabuada = ". ($tabuada*3)."<br>";
endfor;
echo"<br/> <hr/>";

// Foreach para cada

$cores = array("Azul", "vermelho", "Amarelo", "Prata");
foreach ($cores as $valor):
    echo $valor ."<br/>";
endforeach;
echo "<br>";

// Exemplo 2 foreach

$marcas = array(10=> "Gol", "Palio", "Fox"); // Também podemos inserir o índice personalizado antes das strings
foreach ($marcas as $indice => $carros): // Nesse caso a variável marcas está atribuindo valor a variável carros 
    echo $indice. " - " .$carros ."<br>";
endforeach;
