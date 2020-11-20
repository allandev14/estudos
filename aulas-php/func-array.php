<?php
//Funções dentro dos Arrays
// A função is_array, indentifica se uma variável é realmente uma array

/*
$nomes  =array("Amanda", "Felipe", "Maria", "José");
    echo is_array($nomes);
*/

/*$nomes = array("Amanda", "Felipe", "Maria", "José");
var_dump(is_array($nomes)) ;
echo "<br /> <br />";

if(is_array($nomes)):
    echo "É uma array";
else:
    echo "Não é uma array";
endif;
echo "<br /> <hr />";

$escola = array("lapis", "borracha", "apontador", "caderno");
var_dump(is_array($escola));
echo "<br /> <br />";

if(is_array($escola)):
        echo "É uma array";
else:
        echo "Não é uma array";
endif;
echo "<br /> <hr />";

/*
*is_array($valor, $array) = verifica se um determinado valor existe
*dentro de alguma posição do array
*/

/*$portas = array("madeira", "vidro", "ferro");

if(in_array("madeira", $portas)):
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;
echo "<br /> <hr />";

$portas = array("vidro");
if(in_array("vidro", $portas)):
    echo "Existe dentro no array";
else:
    echo "Não existe dentro do array";
endif;
echo "<br /> <hr />";

*/
/*$portas = array("ferro");
if(in_array("ferro", $portas)):
    echo "Existe dentro da array";
else:
    echo "Não existe dentro do array";
endif;

//Arrays_keys($array) = Retorna todas as chaves ou uma parte das chaves de array

$keys = array_keys($portas);

ptint_r($keys);

*/

$nomes = array("Amiga"=>"Amanda", "Colega"=>"Carla", "Prima"=>"Diana");

$keys = array_keys($nomes);
print_r($keys);