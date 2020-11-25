<?php
if (isset($_POST['enviar-formulario'])):
    // Arrays de erro
    $erros = array();

    //Sanetize
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome. "<br>";
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    echo $idade. "<br>";
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    echo $email. "<br>";
    $url = filter_input()INPUT_POST, 'url', FILTER_SANTIZE_URL);
    echo $url;
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