<?php
/*
Confirmação de instancia de dados no formulário
if (isset($_POST['enviar-formulario'])):
    echo "Enviou";
else:
    echo "Não enviou";
endif;
echo "<br>";

var_dump($_POST);
*/
if (isset($_POST['enviar-formulario'])):
    $erros = array();

    if ($idade = filter_input (INPUT_POST, "idade", FILTER_VALIDATE_INT)):
        echo "É um inteiro";
    else:
        echo "Não é um inteiro"; // Essa parte é opicional para execução do código
    endif;

    echo "<br>";
    if ($email = filter_input (INPUT_POST, "email", FILTER_VALIDATE_EMAIL)):
    endif;

    if (!$peso = filter_input (INPUT_POST, "idade", FILTER_VALIDATE_INT)):
        $erros[] = "Peso precisa ser do tipo int";
    endif;
    if(!empty($erros)): // empty aqui significa por enquanto
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns seus dados estão corretos.";
    endif;
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!-- Nesse caso a variável GLOBAL faz referencia ao nome do proprio documento!-->
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input Type="text" name="Peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type='submit' name="enviar-formulario">Enviar</button> <br>
    </form>
    <!--<a href='dados.php?idade=25&sobrenome=Souza'>Enviar dados</a>Podemos adicionar um parametro no arquivo php
    inserindo ? para indicar o inicio de um metódo e & para indicar que teremos mais um metódo!-->
</body>
</html>