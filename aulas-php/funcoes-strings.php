<?php

// Funções para strings
// strtoupper Converte strings minuscúlas para maiuscúlas

$nome = "adriana cubas";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<br/> <hr/>";

// Exemplo 2

$uchira = "itachi uchira";
$susano = strtoupper($uchira);
echo $susano;
echo "<br/> <hr/>";

// strtolower Converte strings maiuscúlas para minuscúlas

$pessoa = "ANA JULIA";
$sobrenome = strtolower($pessoa);
echo $sobrenome;
echo "<br/>";

// Exemplo 2

$pelo = "GATO";
$felino = strtolower($pelo);
echo $felino;
echo "<b/r> <hr/>";

// substr mostra na tela apenas parte de uma string informada previamente

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);
echo "<br/> <hr/>";

// str_pad atribui uma quantida de strings para o código
$objeto = "casa";
$novoObjeto = str_pad($objeto, 1, "*****", STR_PAD_LEFT ); // O último parâmetro denota o lado onde o últim parâmetro irá aparacer

// string_repeat Repete uma string por período determinado previamente

$string = str_repeat("sucesso", 5);  
echo $string;
echo "<br/> <hr/>";

// strlen Demonstra o comprimento da string

$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<br/> <hr/>";

// str_repleace Insere uma nova palavra dentro de uma frase

$texto = "O senhor é a rocha da minha salvação, com ele não há mais vechame não";
$novoTexto = str_replace("vechame não", "condenação", $texto); /* Aqui no primeiro campo inserimos o texto que será
retirado já o no segundo espaço será o texto que será inserido e o terceiro é basicamente o a variável que foi declarada*/
echo "<br/> <hr/>";

// strpos exibe a posição de uma string anteriormente indicada
echo strpos($texto, "salvação"); 
echo "<br/> <hr/>";