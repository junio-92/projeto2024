<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <?php
    $conexao = mysqli_connect("localhost", "root", "", "teste");
    //CHECAR CONEXAO

    if (!$conexao) {
        echo"NÃO CONECTADO";
    }

    echo"CONECTADO AO BANCO>>>>>";


    //RECONHECER CPF EXIXTENTE
    $cpf = $_POST ['cpf'];
    $cpf = mysqli_real_escape_string($conexao, $cpf);
    $cpf = "SELECT cpf FROM tste.dados WHERE cpf='$cpf";
    $retorno = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($retorno)>0){
        echo"CPF JÁ CADASTRADO!<br>";
        
    }else{
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];

        $sql = "INSERT INTO teste.dados(nomeemail,cpf) values('$nome', '$email', '$cpf)";
        $resultado = mysqli_query($conexao,$sql);
        
        echo"CADASTRO REALIZADO<BR>";

    }
        


    ?>    
</body>
</html>