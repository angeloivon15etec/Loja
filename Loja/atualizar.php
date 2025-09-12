<?php
    require 'conexao.php';
    
    $id = $_GET['id'];
    $novoNome = $_POST['produtoNovo'];
    $novoPreco = $_POST['precoNovo'];
    $novoQuantidade = $_POST['quantidadeNovo'];

    $sql = "UPDATE produtos SET nome = :nomeNovo, preco = :precoNovo, quantidade = :quantidadeNovo WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    
    
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nomeNovo', $novoNome);
    $stmt->bindParam(':precoNovo', $novoPreco);
    $stmt->bindParam(':quantidadeNovo', $novoQuantidade);
   
   
    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
?>