<?php 
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha']))){
        //acessar o sistema.
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


       $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$senha' ";
       $result = $conection->query($sql);

       if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']); 
        header('Location: login.php');
            
       }
       else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
       }
    }    
    
    else{
            header('Location: login.php');
        }



?>