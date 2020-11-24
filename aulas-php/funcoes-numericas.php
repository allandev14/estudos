<?php

// Funções Númericas

// number_format formata a unidade númerica e realiza a apresentação da mesma na tela

$db = 1234.56;
$preco = number_format($db, 2, ",",".");
echo "O valor do produto é R$ $preco";
echo "<br/> <hr/>";

// Exemplo 2

$a = 2351.23;
$produto = number_format($a, 2, ",",".");
echo "O valor do produto será de R$ $produto";
echo "<br/> <hr/>";

// round realiza o arredondamento do para baixo ou para cima 
echo round(3.6);
echo "<br/>";
echo round(7.4);
echo "<br/>";
echo round(5.1);
echo "<br/> <hr/>";

// ceil realiza o arredondamento somente para cima
echo ceil(5.10);
echo "<br/>";
echo ceil(7.9);
echo "<br/>";
echo ceil(9.3);
echo "<br/>";

// floor realiza o arredondamento somente para braixo
echo floor(9.9);
echo "<br/>";
echo floor(7.7);
echo "<br/>";
echo floor(8.7);
echo "<br/>";
