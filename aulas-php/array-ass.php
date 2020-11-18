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
echo "<br />";
echo "<hr />";

// Arrays multidimensionais
// São arrays que contém um mais arrays internos

$desenhos = array(
        "anime" => array("Asuna", "garota", "anime", "japonesa", "doce"),
        "manga" => array(5=>"Kirito", 6=>"garoto", 7=>"mangá", 8=>"japones", 9=>"espada-dupla"),
        "naruto" => array(10=>"Sasuke", 11=>"uchira", 12=>"renegado", 13=>"japones", 14=>"espadachim"));

echo $desenhos["anime"][0];
    echo "<br/> <hr />";
echo $desenhos["anime"][1];
    echo "<br /> <hr />";
echo $desenhos["anime"][2];
    echo "<br /> <hr />";
echo $desenhos["anime"][3];
    echo "<br /> <hr />";
echo $desenhos["anime"][4];
    echo "<br /> <hr />";
echo $desenhos["manga"][5];
    echo "<br/ > <hr />";
echo $desenhos["manga"][6];
    echo "<br /> <hr />";
echo $desenhos["manga"][7];
    echo "<br /> <hr />";
echo $desenhos["manga"][8];
    echo "<br /> <hr />";
echo $desenhos["manga"][9];
    echo "<br /> <hr />";
echo $desenhos["naruto"][10];
    echo "<br /> <hr />";
echo $desenhos["naruto"][11];
    echo "<br /> <hr />";
echo $desenhos["naruto"][12];
    echo "<br /> <hr />";
echo $desenhos["naruto"][13];
    echo "<br /> <hr />";
echo $desenhos["naruto"][14];
    echo "<br /> <hr />";



