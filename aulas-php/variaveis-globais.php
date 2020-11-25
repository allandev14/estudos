<?php

// Variáveis Superglobais no PHP

// Variável $GLOBALS variável usada para acessar qualquer variável global dentro do script php

$x = 10;
$y = 12;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();
