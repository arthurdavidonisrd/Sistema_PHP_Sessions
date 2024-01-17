<?php 
$senha = "";
$nome_banco = "register_login";
$host = "localhost";
$usuario = "root";

$conection = new mysqli($host, $usuario, $senha, $nome_banco);

//if($conection->connect_error){
  //  echo "Falha ao conectar no banco de dados";
//}
//else{
   // echo "conexao efetuada com sucesso";
//}



?>