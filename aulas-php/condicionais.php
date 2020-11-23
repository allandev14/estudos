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
