<?php 
    if(isset($_POST['submit'])){
        include_once("config.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];

        $register_sql = mysqli_query($conection, "INSERT INTO users(nome,email,senha,telefone) VALUES ('$nome','$email','$senha', '$telefone')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        body{
            background-image: linear-gradient(to right,#087CC3,#0B486A);
        }
        h1{
            text-align:center;
            color: white;
        }
        h2{
            color: white;
            text-align: center;
        }
        form{
            background-color: #04131C;
            width: 250px;
            height: 380px;
            padding: 15px;
            display: block;
            margin: auto;
            border-radius: 6px;
        }
        input{
            display: block;
            margin:auto;
            height: 30px;
            width: 230px;
            margin-bottom: 10px;
        }
        .btn{
            width: 180px;
            border: 0px;
            height: 25px;
        }
        .btn:hover{
            color:white;
            background-color: #087CC3;
            
        }
        a{
            color: white;

        }
        a:hover{
            background-color: #04131C;
            padding:6px;
            border-radius:10px;
        }
        


    </style>
</head>
<body>
<div class="back">
    <a href="index.php">Voltar</a>
</div>
    <header>
        <h1>
            Faça seu cadastro no sistema!
        </h1> 
    </header>

    <main>
        <div class="formulario">
            <form action="cadastro.php" method="POST">
            <h2>Cadastro de clientes</h2>
                <input type="text" name="nome" placeholder="Nome:" id="">
                <br>
                <input type="email" placeholder="E-mail:" name="email" id="">
                <br>
                <input type="password" placeholder="Senha:" name="senha" id="">
                <br>
                <input type="number" placeholder="Telefone:" name="telefone" id="">
                <br>
                <input class="btn" type="submit" name="submit" value="Cadastrar">

            </form>
        </div>
    </main>
    
</body>
</html>