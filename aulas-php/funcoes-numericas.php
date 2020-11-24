<?php

// Funções Númericas

// Exemplo 1

$db = 1234.56;
$preco = number_format($db, 2, ",",".");
echo "O valor do produto é R$ $preco";
echo "<br/> <hr/>";

// Exemplo 2

$a = 2351.23;
$produto = number_format($a, 2, ",",".");
echo "O valor do produto será de R$ $produto";
