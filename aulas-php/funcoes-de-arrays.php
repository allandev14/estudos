<?php
//Funções dentro dos Arrays
// A função is_array, indentifica se uma variável é realmente uma array

/*
$nomes  =array("Amanda", "Felipe", "Maria", "José");
    echo is_array($nomes);
*/

$nomes = array("Amanda", "Felipe", "Maria", "José");
var_dump(is_array($nomes)) ;
echo "<br /> <br />";

if(is_array($nomes)):
    echo "É uma array";
else:
    echo "Não é uma array";
endif;

