<?php

// Operadores Lógicos
// Nós permite realizar comparações entre expressões

// Operador E && ou and

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
    echo "Você não tem um animal de estimação";
endif;
echo "<br/> <hr/>";

// Operador Ou || ou Or 
// Retorna verdeiro se ao menos uma expressão for declarada verdadeira

$a = 24;
$b = "Alessandra";

if (($a == 22) or ($b == "Alessandra")):
    echo "É verdadeiro";
else:
    echo "Não é verdadeiro";
endif;
echo "<br/>";

// Exemplo 2

$b2 = 12;
$b3 = 25;

if (($b2 == 12) or ($b3 == 25)):
    echo "É verdadeiro";
else:
    echo "Não é verdadeiro";
endif;
