
<?php




if (isset($_POST['submit'])) {

    include_once('crud.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    
    
    $result = mysqli_query($conexao, "SELECT * FROM  cadastre(nome,email,cpf) VALUES ('$nome', '$email', '$cpf')") ;
    
}    



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        div{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>

        <form action="crud.php" method="post">
        <label>
            <h3>Nome</h3>
         <input type="text" name="nome"/>
        </label><br><br>
        <label>
            <h3>Email</h3>
        <input type="text" name="email"/>
        </label><br><br>
        <label>
        <h3>CPF</h3>
        <input type="text" name="cpf"/>
        </label><br><br>
            
    <input class="button" type="reset" value="Limpar"><br><br>
    <input type="submit">

    </div>
</body>
</html>