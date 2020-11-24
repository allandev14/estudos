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
$novoObjeto = str_pad($objeto, 7, "de Deus"); 

