<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
        body{
            background-image: linear-gradient(to right,#006FBB,#073F62);
        }
        header{
            text-align:center;
            color:white;
            
        }
        a{
            
            border: 1.2px solid #007CD2;
            max-width: 100px;
            margin-bottom: 10px;
            text-decoration:none;
            color:white;
            text-align: center;
            font-size: 1.3em;
            margin: 10px;
            padding: 6px;
            
        }
        a:hover{
            background-color: #006FBB;
            border-radius: 6px;
        }
        .options{
            display: flex;
            flex-direction: row;
            justify-content: center;
            background-color: #01253B;
            max-width: 300px;
            margin: auto;
            border-radius:12px;
            
        }
      
        

    </style>
</head>
<body>
    <header>
        <h1>
            Cadastro e login em PHP
        </h1>
    </header>
    
    <main>
        <div class="options">
            <a href="login.php">Login </a>
            <a href="cadastro.php">Cadastrar</a>
        </div>
    </main>
    
</body>
</html>