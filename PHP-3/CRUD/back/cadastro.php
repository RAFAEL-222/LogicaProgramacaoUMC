<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Aluno</title>
        <link rel="stylesheet" href="../estilos/styleCadastrar.css">
</head>
<body>
        <header>
                <nav>
                        <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Cadastrar Usuario</a></li>
                        <li><a href="">Listas Usuarios</a></li>   
                        </ul>
                </nav>
        </header>

        <main>
                <form action="cadastro.php" method="post"> 
                        <h2>Cadastro Aluno</h2>

                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" required>

                        <label for="sobrenome">Sobrenome: </label>
                        <input type="text" name="sobrenome" id="sobrenome" required>

                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email" required>

                        <label for="curso">selecione o curso: :</label>
                        <select name="curso" id="curso">
                                <option value="ads">Analise e Desenvolvimento de Sistemas</option>
                                <option value="engenharia_software">Engenharia de Sofware</option>
                                <option value="sistemas_informacao">Sistema de Informacao</option>
                                <option value="ciencias_computacao">Ciencia da Computacao</option>
                        </select>

                        <input type="submit" value="Cadastrar">

                        <?php
                             echo var_dump($_POST);

                        ?>

                </form>
        </main>


        
</body>
</html>