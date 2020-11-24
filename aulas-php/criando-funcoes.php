<?php
// Criando funções
function exibirNome() {
    echo "Meu nome é Fulano";
}

exibirNome();
echo "<br/>";

// Exemplo 2
function exibirData() {
    if(24.11 === 24.11):
        echo "Hoje é dia 24.11";
    else:
        echo "Hoje não é dia 24.11";
    endif;
}

exibirData();
echo "<br/> <hr/>";

// Exemplo 3
function exibirMoeda() {
    if (50 <=(5 * 9)):
        echo "Verdadeiro";
    else:
        echo "Falso";
    endif;
    }

exibirMoeda();
echo "<br/> <hr/>";

// Exemplo 4

function exibirSoma() {

    $nota1 = 10;
    $nota2 = 2;
    $media = 7;
    
    if (($nota1 - $nota2) >= $media):
        echo "Parabéns você foi aprovado";
    else:
        echo "Você não foi aprovado";
    endif;   
}

exibirSoma();