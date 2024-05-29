<?php

include('Mysql.php');
junio::conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form_cd">
    <h1>Faça o seu cadastro</h1>
   <form method="POST">
    <div><input type="text" name="nome" placeholder="Nome"></div>
    <div><input type="text" name="email" placeholder="Email"></div>
    <div><input type="text" name="senha" placeholder="Senha"></div>
    <div><input type="submit" name="acao" value="Emviar"></div>
    <div><input type="hidden" name="form" value="f_form"></div>
</div>

   </form> 
</body>
</html>