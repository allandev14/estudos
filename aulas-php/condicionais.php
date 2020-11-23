<?php

//condicionais em php

// Estudar a variável endif depois.

$numero = 15;
if ($numero == 15):
    echo "O número é 15";
else:
    echo "O número não é igual a 15";
endif;
    echo "<br/> <hr/>";

$n1 = 26;
if ($n1 == 3):
     echo "O númreo é igual a 26";
elseif($numero <=9):
    echo "È maior ou diferente de 9";
else:
    echo "O número não é igual a 26";
endif;
    echo "<br/> <hr/>";

$nome = "Asuna";
if ($nome == "Asuna"):
    echo "Prazer em te conhecer $nome";
else:
    echo "Nós vemos em breve";
endif;
echo "<br/> <hr/>";

// Operadores ternários
// Nesse caso o operador if é representado pelo sinal de ?, e o else é representado pelo símbolo de :


$media = 3;

echo ($media >= 7) ? "Aprovado!" : "Reprovado!"; 

$nota = 5;
$aluno = 'João';

echo "<br/> <hr/>";

echo ($nota >= 10) ? "$aluno, você foi Aprovado esse ano" :"$aluno, infelizmente você não foi aprovado esse ano";

<<<<<<< HEAD
// Trabalhando com variáveis dentro de constates

echo "<h3>Olá mundo<h3/>";
=======


>>>>>>> php
