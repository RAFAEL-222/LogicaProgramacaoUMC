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
        <section id="containerSection">
            <form action="verificarCadastro.php" method="post">
                <input type="email" placeholder="Informe seu E-mail: " name="email" id="email">
                <input type="submit" value="Buscar">                        
            </form>
        </section>
        <section>

            <?php
            // Verificar se o campo email está preenchido
            if (isset($_POST["email"])) {
                // Salva a informação de email enviada pelo form
                $email = $_POST["email"];

                // Recebe as informações de conexão com o DB      
                include("../conexao/conexao.php");

                // Query ao Banco de Dados
                $sql = "SELECT * FROM usuarios WHERE email = ?";

                // Preparar a conexão junto da consulta
                $stmt = $conn->prepare($sql);

                // Validando se a conexão foi feita com sucesso
                if ($stmt) {
                    // Troca de informação de email pela ? no $sql
                    $stmt->bind_param("s", $email);
                    // Executa o comando
                    $stmt->execute();
                    // Salva o resultado da consulta
                    $resultado = $stmt->get_result();
                    
                    if ($resultado->num_rows > 0) {
                        // Armazenar as informações vindas do db
                        $row = $resultado->fetch_assoc();

                        echo "
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>E-mail</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['nome']}</td>
                                        <td>{$row['sobrenome']}</td>
                                        <td>{$row['email']}</td>
                                        <td>
                                            <form action='excluirCadastro.php' method='post'>
                                                <input type='hidden' name='id' value='{$row['id']}'>
                                                <input type='submit' id='btn-excluir' value='EXCLUIR'>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                    } else {
                        echo "<div class='mensagem erro'>E-mail $email não encontrado</div>";
                    }

                    // Encerra a consulta SQL
                    $stmt->close();
                } else {
                    echo "<div class='mensagem erro'>Erro na consulta</div>";
                }

                // Encerra a conexão com o banco de dados
                $conn->close();
            }
            ?>
        </section>
    </main>
</body>
</html>
