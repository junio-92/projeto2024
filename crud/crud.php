
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Cadastro efetuado com sucesso</h1>
    
</body>
</html>

<?php

$dbhost = 'localhost';
$Username = 'root';
$dbPassword = '';
$dbName = 'cadastramento';

$conexao = new mysqli($dbhost,$Username,$dbPassword,$dbName);

if ($conexao->connect_errno)
 {
    echo "Erro";
}else{
    echo "";
}


