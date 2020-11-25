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
function exibirNota() {
    if (50 <=(5 * 9)):
        echo "Verdadeiro";
    else:
        echo "Falso";
    endif;
    }

exibirNota();
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
echo "<br/> <hr/>";

// Exemplo 5

function exibirNome1 ($nome01) {
    echo "Olá, prazer em te conhecer $nome01";
}
exibirNome1("Karina Leite");
echo "<br/> <hr/>";

// Exemplo 6
function calcularMedia ($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "$nome, sua nota foi igual à $media aprovado.";
    else:
        echo "Reprovado sua $nome sua nota foi igual à $media.";
    endif;
}

calcularMedia("Adriano", 7, 5, 9, 10);
echo "<br/> <hr/>";

// Exemplo 7
function somaValor ($nome02, $n1, $n2, $n3, $n4) {
    $soma = ($n1 + $n2 +$n3 + $n4);
    if($soma == 100):
        echo "O valor esperado era igual a 100, sua foi igual à $soma, Parabéns.";
    else:
        echo "Sua soma não retornou o valor de 100 como esperado $soma, tente novamente.";
    endif;
}

somaValor("Carlos", 25, 25, 25, 25);
