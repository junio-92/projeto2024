<?php

$dbhost = 'Localhost';
$Username = 'root';
$dbPassword = '';
$dbName = 'cadastramento';

$conexao = new mysqli($dbhost,$Username,$dbPassword,$dbName);

if ($conexao->connect_errno)
 {
    echo "Erro";
}else{
    echo "Conectado";
}
?>