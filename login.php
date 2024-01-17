<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1{
            color: white;
            text-align: center;
            padding-top: 30px;
            font-size: 2em;
            font-family: 'Courier New', Courier, monospace;
        }
        body{
            background-image: linear-gradient(to right, #0165AA,#06466E);
        }
        .form_login{
            background-color: #0D170A;
            width: 320px;
            display: block;
            margin: auto;
            border-radius:14px;
            height: 280px;
            margin-top: 200px;
            
        }

        .btn{
            margin-top: 30px;
            width: 100px;
            border: 0px;
            border-radius: 10px;
        }
        .btn:hover{
            background-color: #0165AA;
            color: white;
        }

        input{
            display: block;
            margin:auto;
            height: 35px;
            width: 220px;
            border: 0px;
            
        }
        a{
            color: white;
        }
        a:hover{
            background-color: #0D170A;
            padding: 6px;
            border-radius: 10px;
        }


    </style>
</head>
<body>
<div class="back_btn">
    <a href="index.php">Voltar</a>
</div>

<section>
    <div class="form_login">
        <form action="testelogin.php" method="POST">
            <h1>Login</h1>
            <input type="text" placeholder="E-mail" name="email" id="">
            <br>
            <input type="password" placeholder="Senha" name="senha" id="">
            
            <input class="btn" type="submit" name="submit" value="Logar">
        </form>
    </div>
</section>


    
</body>
</html>