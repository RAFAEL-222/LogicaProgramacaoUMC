<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Nota</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="verificarCadastro.php">Listar Usuários</a></li>
            </ul>
        </nav>
    </header>  

    <main>
        <section id="containerSection">
            <form action="atualizarNota.php" method="post">
                <select name="curso" id="curso" class="estilo">
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="engenharia_software">Engenharia de Software</option>
                    <option value="sistemas_informacao">Sistema da Informação</option>
                    <option value="ciencias_computacao">Ciências da Computação</option>
                </select>
                <input type="submit" value="Buscar">
            </form>
        </section>
        <section>
            <?php   
                
                //Verificar se o $POST['CURSO'] esta vazio
                if (isset($_POST["curso"])) {
                    
                   
                    //Chamar a conexao com o DB
                    include("../conexao/conexao.php");

                    //Salvar a informcao do curso selecionado
                    $curso = $_POST["curso"];

                    //Consulta SQL
                    $sql = "SELECT * FROM USUARIOS WHERE curso = ?";

                    //preparar a consulta SQL junto da conexao
                    $stmt = $conn->prepare($sql);
                   
                    //Verificar se a conexao foi bem-sucedida
                    if ($stmt) {
                        $stmt ->bind_param("s" , $curso);
                        $stmt ->execute();
                        $resultado = $stmt->get_result();
                        
                        if ($resultado ->num_rows > 0) {
                            echo "       
                                <form action = 'processaNota.php' method='post' id= 'form-nota'>       
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Sobrenome</th>
                                                <th>Nota Atividade</th>
                                                <th>Nota Prova</th>
                                            </tr>
                                        </thead>
                                        <tbody> ";
                                            while($row = $resultado ->fetch_assoc()){
                                                echo "
                                                <tr>
                                                    <td>{$row['id']}</td>
                                                    <td>{$row['nome']}</td>
                                                    <td>{$row['sobrenome']}</td>
                                                    <td>
                                                        <input type= 'number' name='nota_atividade[{$row['id']}]' required>
                                                    </td>
                                                    <td>
                                                        <input type= 'number' name='nota_prova[{$row['id']}]' required>
                                                    </td>
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
                            echo "<div class= 'mensagem erro'>Esse $curso nao possui registros de usuarios</div>";
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