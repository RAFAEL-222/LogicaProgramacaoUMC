<?php
    if(isset($_POST['id'])){
        include("../conexao/conexao.php");
        $id = $_POST['id'];

        //Prepara a consulta SQL para excluir o cadastro
        $sql = "DELETE FROM usuarios WHERE ID = ?";
        $stmt = $conn ->prepare($sql);

        if ($stmt) {
            $stmt ->bind_param("i" , $id);
            //Executa a query
            $stmt ->execute();

            //Redicionar o usuario
            header("location: verificarCadastro.php");
            $stmt ->close();
        } else {
            echo "<div class='mensagem erro'> Erro na consulta </div>";
        }
 
        $conn ->close();
        
    }





?>