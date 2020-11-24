<?php

// Operadores Lógicos
// Nós permite realizar comparações entre expressões

$idade = 25;
$nome = "Amanda";

/* e Verdadeiro (TRUE) se tanto $a quanto $b são verdadeiros.
Pode ser representado por && ou um and */

if (($idade == 25) && ($nome == "Amanda")): //Retorna um valor verdadeiro quando as duas expressões são verdadeiras
    echo "É verdadeiro";
else:
    echo "Não é verdadeiro";
endif;
echo "<br/> <hr/>";

// Exemplo 2

$animal = "cachorro";
$porte = "pequeno";

if(($animal == "cachorro") and ($porte == "pequeno")):
    echo "Você tem um $animal";
else:
    echo "VocÊ não tem um animal de estimação";
endif;
