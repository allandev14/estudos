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

echo $_SERVER['PHP_SELF']. "<br/>";  //variável identifica qual o caminho do arquivo PHP na máquina local
echo $_SERVER['SERVER_NAME']."<br/>"; // variável mostra qual o servidor está alocando o PHP
echo $_SERVER['SCRIPT_FILENAME']. "<br/>"; // variável mostra qual o caminho absoluto do SCRIPT
echo $_SERVER['DOCUMENT_ROOT']. "<br/>"; // Variável mostra o caminho absoluto do documento
echo $_SERVER['SERVER_PORT']. "<br/>"; // variável mostra o camnho da porta do servidor 
 