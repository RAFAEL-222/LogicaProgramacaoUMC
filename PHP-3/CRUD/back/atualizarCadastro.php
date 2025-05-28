<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
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
            <form action="atualizarCadastro.php" method="post">
                <input type="email" placeholder="Informe seu E-mail: " name="email" id="email">
                <input type="submit" value="Buscar">                        
            </form>
        </section>
        <section>
            <?php   
                
                //Verificar se o $POST['CURSO'] esta vazio
                if (isset($_POST["email"])) {
                    
                    //Chamar a conexao com o DB
                    include("../conexao/conexao.php");

                    //Salvar a informcao do curso selecionado
                    $email = $_POST["email"];

                    //Consulta SQL
                    $sql = "SELECT * FROM USUARIOS WHERE email = ?";

                    //preparar a consulta SQL junto da conexao
                    $stmt = $conn->prepare($sql);
                   
                    //Verificar se a conexao foi bem-sucedida
                    if ($stmt) {
                        $stmt ->bind_param("s" , $email);
                        $stmt ->execute();
                        $resultado = $stmt->get_result();
                        
                        if ($resultado ->num_rows > 0) {
                            echo "       
                                <form action = 'processaCadastro.php' method='post' id= 'form-nota'>       
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Sobrenome</th>
                                                <th>email</th>
                                
                                            </tr>
                                        </thead>
                                        <tbody> ";
                                            while($row = $resultado ->fetch_assoc()){
                                                echo "
                                                <tr>
                                                    <td>{$row['id']}</td>
                                                    <td>{$row['nome']}</td>
                                                    <td>{$row['sobrenome']}</td>
                                                    <td>{$row['email']}</td>
                                                </tr>
                                                <tr>
                                                    <td>{$row['id']}</td>
                                                    <td>
                                                        <input type= 'text' name='nome[{$row['id']}]' required>
                                                    </td>
                                                    <td>
                                                        <input type= 'text' name='sobrenome[{$row['id']}]' required>
                                                    </td>
                                                    <td>{$row['email']}</td>
                                                </tr>";
                                            }
                            echo"
                                        </tbody>
                                    </table>
                            ";
                            echo 
                                "<input type='submit' value='Enviar'>
                                </form>";
                        } else {
                            echo "<div class= 'mensagem erro'>Esse $email nao possui registros de usuarios</div>";
                        }

                        $stmt ->close();
                    }
                }

                $conn ->close();
            ?>
        </section>
    </main>
    
</body>
</html>