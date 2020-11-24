<?php

// Operadores Lógicos
// Nós permite realizar comparações entre expressões

$idade = 25;
$nome = "Amanda";

/* e Verdadeiro (TRUE) se tanto $a quanto $b são verdadeiros.
Pode ser representado por && ou um and */

if (($idade == 25) && ($nome == "Amanda")):
    echo "É verdadeiro";
else:
    echo "Não é verdadeiro";
endif;
