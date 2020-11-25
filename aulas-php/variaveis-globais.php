<?php

// Variáveis Superglobais no PHP

// Variável $GLOBALS variável usada para acessar qualquer variável global dentro do script php

$x = 10;
$y = 12;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();
echo "<br/> <hr/>";

// Exemplo 2
$a = 120;
$b = 10;

function soma02() {
    echo $GLOBALS['a'] + $GLOBALS['b'];
}

soma02();
echo "<br/> <hr/>";
