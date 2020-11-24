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

if (($b2 == 12) || ($b3 == 25)):
    echo "É verdadeiro";
else:
    echo "Não é verdadeiro";
endif;
echo "<br/> <hr/>";

/* Operador Ou exclusivo xor retorna uma valor positivo quando apenas uma das expressões seja verdadeira
Se os dois forem verdadeiro ele irá retorna o valor como falso */

$dia = 24;
$mes = "novembro";
if (($dia == 24) xor ($mes == "novembro")):
    echo "Sim hoje é dia $dia";
else:
    echo "Não hoje não é dia $dia";
endif;
echo "<br/> <hr/>";

// Exemplo 2 xor 

$terra = "planeta";
$lua = "satelite-natural";
if (($terra == "barco") xor ($lua == "satelite-natural")):
    echo "Verdadeiro";
else:
    echo "Falso";
endif;
echo "<br/> <hr/>";

// Operador de negação ! como o nome sugere realiza o negação dá expressão indicada na sentença a frente

$computador = "tela";
$mesa = "cadeira";

if (!("computador" == "tela") and ($mesa == "cadeira")):
    echo "O valor é verdadeiro";
else:
    echo "O valor é falso";
endif;

