<?php
require 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Produto apagado com sucesso!";
        header('Location: index.php');
        exit();
    } else {
        echo "Erro ao apagar produto.";
    }
} else {
    header('Location: index.php');
    exit();
}
?>
