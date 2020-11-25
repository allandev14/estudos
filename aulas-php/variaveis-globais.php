<?php

// Variáveis Superglobais no PHP

// Variável $GLOBALS array usada para acessar qualquer variável global dentro do script php

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

// Super $_SERVER é uma arrar que guarda vários indices

echo $_SERVER['PHP_SELF']. "<br/>";
echo $_SERVER['SERVER_NAME']."<br/>";
