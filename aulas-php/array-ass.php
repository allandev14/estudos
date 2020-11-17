<?php
//Array associativo

$garota = array("nome"=> "Asuna", "idade"=> "23", "altura"=> "1.65", "cidade"=> "Japão", "estado"=> "feliz");
echo $garota["nome"];
echo "<br />";
echo $garota["idade"];
echo "<br />";
echo $garota["altura"];
echo "<br />";
echo $garota["cidade"];
echo "<br />";
echo $garota["estado"];
echo "<br />";
echo "<hr />";
foreach($garota as $indice => $valor) {
        echo $indice. ":" .$valor."<br />";
}
echo "<br />";
echo "<hr />";

$time = array("Atacante"=> "João José", "idade"=> "18", "peso"=> "87.6", "posição"=> "esquerda");
foreach($time as $jogo => $campeao) {
        echo $jogo. ":" .$campeao."<br />";
}