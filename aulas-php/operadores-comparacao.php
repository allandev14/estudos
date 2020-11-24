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

if (1 === 1): //Atribuição de idêntidade
    echo "Positivo";
else:
    echo "Negativo";
endif;
