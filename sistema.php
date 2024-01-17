<?php 
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');

    }
    $nome = ($_SESSION['email']);

    $sql = "SELECT * FROM users ORDER BY id DESC";

    $result =$conection->query($sql);

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-image: linear-gradient(to right, #0071BD,#093955);
        }
        h1{
            color: white;
            text-align: center;
            margin-top:30px;
            font-size: 2.6em;
        }
        h2{
            font-size: 1.5em;
        }
        .menu{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: #006BFE;
            padding: 20px;
    
            
        }
        header{
            color: white;
            
        }
        .btn{
            color:white;
            padding: 6px;
            height: 20px;
            border-radius: 10px;
            text-decoration:none;
            
        }
    </style>
</head>
<body>
    <header>
        <div class="menu">
            <h2>Sistema do Arthur</h2>
            <a class="btn" href="logout.php">Sair</a>
        </div>
    </header>

        <h1>
            bem vindo <?php echo "$nome"?>
        </h1>

    <main>
        <div>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">ID:</th>
                <th scope="col">Nome:</th>
                <th scope="col">E-mail:</th>
                <th scope="col">Senha:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['senha']."</td>";

                    }
                
                
                ?>
            </tbody>
            </table>
        </div>

        <input name="submit" type="button" value="Apagar registros">

    </main>
    
</body>
</html>