<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEU CRUD</title>
</head>
<body>
    <h1>Enviado com Sucesso</h1>
</body>
</html>

<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_URL);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

$result_formulario = "INSERT INTO cadastre(nome, email) VALUES ('$nome', '$email', NOW ())";
$resultado_formulario = mysqli_query($conn, $result_formulario);



?>