<?php
$serverName = "Localhost";
$userName = "root";
$password = "";
$dbName = "faculdade";

//Criando conexao
$conn = new msqli($serverName, $userName, $password, $dbName);

//Validacao de Conexao
if($conn->connect_error){
        echo "Conexao Falhou"
}
else{
        echo "Conexao feita com sucesso";
}


?>