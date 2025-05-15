<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificar Cadastro</title>
        <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="verificarCadastro.php">Listas Usuários</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id ="containerSection">
                <form action="verificarCadastro.php" method= "post">
                        <input type="email" placeholdaer="Informe seu E-mail: " name="email" id="email">
                        <input type="submit" value="Buscar">                        
                </form>
        </section>
        <section>

                <?php

                        //Verificar se o campo email esta preenchido

                        if(isset($_POST["email"])){
                                //Exibir as informacoes passadas pelo form
                                //echo var_dump($_POST);
                                
                                //Salva a informacao de emial eviado pelo o form
                                $email = $_POST["email"];

                                //Recebe as informacoes de conexao com o DB      
                                include("../conexao/conexao.php");

                                //Querry ao Banco de Dados
                                $sql = "SELECT * FROM usuarios WHERE email = ?";

                                //Preparar a conexao junto da consulta
                                $stmt = $conn -> prepare($sql);

                                //Validando se a conexao foi feita com sucesso
                                if($stmt){
                                        //Troca de informacao de email pela ? no $sql
                                        $stmt -> bind_param("s", $email);
                                        //Execute o comando
                                        $stmt -> execute();
                                        //Salva o resultado da consulta
                                        $resultado = $stmt -> get_result();
                                        
                                        if($resultado ->num_rows > 0){
                                                echo "ELE EXITE"
                                                //Armazenar as informacoes vindas do db
                                                $row = $resultado ->fetch_assoc();
                                                echo var_dump($row);
        
                                                
                                        }else {
                                                echo "ELE NAO EXISTE"

                                        }
                                        


                                }
                        }

                ?>

        </section>
    </main>
        
</body>
</html>