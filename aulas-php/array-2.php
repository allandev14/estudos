<?php
//Continuação de Array
//Com o comando do count podemos ver o valor dentro de uma variável

$herois = ["homem-aranha", "homem-de-ferro", "Visão"];
print_r($herois);
echo "<br />";
echo "<hr />";

echo count($herois);
echo "<br />";
echo "<hr />";

$frutas = ["Abiu", "Açaí", "Amêndoa", "Araçá", "Babaçu", "Bacuri"];
print_r($frutas);
echo "<br />";
echo "<hr />";

$totaldefrutas =  count($frutas);
echo $totaldefrutas;
echo "<br />";
echo "<hr />";

$xadrez = ["Rei", "Rainha", "Torres", "Bispos", "Cavalos", "Peões", "Dama"];
print_r($xadrez);
echo "<br />";
echo "<hr />";

$jogodeacademico = count($xadrez);
echo $jogodeacademico;
echo "<br />";
echo "<hr />";


//Foreach realiza um loop dentro das variáveis

foreach($xadrez as $valor) {
    echo $valor."<br>";
}
echo "<br />";
echo "<hr />";

$esportes = ["Atletismo", "Natação", "Ciclimo", "Skate", "Handebol"];
print_r($esportes);

$olimpiadas = count($esportes);
echo "<br />";
echo "<hr />";


foreach($esportes as $medalhas) {
    echo $medalhas. "<br>";
}
echo "<br />";
echo "<hr />";

//Array são númericos quando os índices ou as chaves são númericos


//Array associativos quando os índices ou as chaves são strings

$pessoa = array("nome" => "Asuna", "idade" => "23", "altura" => "1.65");
print_r($pessoa);
echo "<br />";
echo "<hr />";
echo $pessoa["altura"];
