<?php
// Sanitização em PHP

// Sanitize
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
echo "nome";

// Exibindo mensagem
   if(!empty($erros)): // empty aqui significa por enquanto
    foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
        else:
            echo "Parabéns seus dados estão corretos.";
        endif;

    
    ?>

<!-- Bloco html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!-- Nesse caso a variável GLOBAL faz referencia ao nome do proprio documento!-->
            Nome: <input Type="text" name="name"><br>
            Idade: <input type="text" name="idade"><br>
            Email: <input type="email" name="email"><br>
            URL: <input type="text" name="url"><br>
    <!-- Link de envio $_GET <button type='submit' name="enviar-formulario">Enviar</button> <br> -->
    <button type='submit' name="enviar-formulario">Enviar</button> <br>
    </form>

</body>
</html>