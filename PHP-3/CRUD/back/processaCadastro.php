<?php
    include("../conexao/conexao.php");

    foreach ($_POST['nome'] as $id => $nome) {
        $sobrenome = $_POST['sobrenome'][$id];

        $sql = "UPDATE usuarios SET nome = ?, sobrenome = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nome, $sobrenome, $id);
        $stmt->execute();
        $stmt->close();
    }

    $conn->close();
    header("Location: atualizarCadastro.php");
?>