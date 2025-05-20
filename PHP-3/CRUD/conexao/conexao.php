<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "usuarios01";

//Criando Conexão
$conn = new mysqli($serverName, $userName, $password, $dbName);

//Validação de Conexão
if ($conn->connect_error){
    echo "Conexão Falhou";
}


?>