<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dados.php" method="POST">
        Nome: <input type="text" name="nome"><br> <br>
        Email: <input type="email" name="email"><br>
        <button type='submit'>Enviar</button> <br>
    </form>
    <a href='dados.php?idade=25&sobrenome=Souza'>Enviar dados</a><!--Podemos adicionar um parametro no arquivo php
    inserindo ? para indicar o inicio de um metódo e & para indicar que teremos mais um metódo!-->
</body>
</html>