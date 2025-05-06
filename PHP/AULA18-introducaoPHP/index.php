<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu primeiro programa</title>
</head>
<body>

    <h1>
        <?php
            echo '<h1> Ola, mundo </h1>';
        ?>
    </h1>

    <h2>Variaveis em PHD</h2>

    <p>
        <?php
            $nome = 'Rafael';
            $email = 'rafael@gmail.com';

            echo "nome $nome <br>";
            echo "Email: $email <br>";
        ?>
    </p>

    <h2>Constantes em PHD</h2>
    <p>
        <?php

            const faculdade = "UMC";
            const cidade = "Mogi das Cruzes";
      
            echo "Faculdade" . faculdade . "<br>";
            echo "Cidade" . cidade . "<br>";

        ?>
    </p>
        
</body>
</html>