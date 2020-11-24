<?php

// Operadores de comparação

if (10 == 10): //Operador de igualdade
    echo "Positivo";
else:  
    echo "Negativo";
endif;
echo "<br/>";

if (20 == 32):
    echo "Sua conta está positiva";
else:
    echo "Sua conta está negativa";
endif;
echo "<br/> <hr/>";

// Operador não positivo

if (1 != 11): // Atribuição não positivo !=
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<br/> <hr/>";

// Operador idêntico

if (1 === 101): //Atribuição de idêntidade
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<br/>";

// Exemplo 2

if (2 === 52):
    "Verdadeiro";
else:
    "Falso";
endif;
echo "<br/> <hr/>";

// Não indêntico

if (10 !== 12): //Atributo de não idêntico
    echo "Postivo";
else:
    echo "Negativo";
endif;
echo "<br/> <hr/>";

// Operador diferente

if (10 <> 10): //Operador de idêntico
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<br/> <hr>";

// Operador de menor Quê
if  (10 < 5): //Operador de menor quê
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<br/>";

// Exemplo 2
if (5 < 5):
    echo "Positivo";
else:
    "Negativo";
endif;
echo "<br/> <hr/>";

// Operador Maior Quê
if (5 > 9):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<br/> <hr/>";

// Exemplo 2
if (10 >2): // Operador de maior Quê
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<br/> <hr/>";

// Operador maior igual
if (15 >= 20): //Operador de maior Quê
    echo "Verdadeiro";
else:
    echo "Negativo";
endif;
echo "<br/> <hr/>";

// Exemplo 2
if (21 >= 23):
    echo "Verdadeiro";
else:
    echo "Negativo";
endif;

// Operador de menor Quê
if (12 <= 23): // Atribuição de menor Quê
    echo "Positivo";
else:
    echo "<Negativo>";
endif;
echo "<br/> <hr/>";

// Exemplo 2

if (25 <= 12):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<br/> <hr/>";

// Operador Space Chip
Var_dump(20 <=> 30); //Só retorna 3 valores
echo "<br>";

// Exemplo 2
var_dump(100 <=> 25);


