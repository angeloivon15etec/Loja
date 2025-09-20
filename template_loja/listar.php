<?php
    include 'cabecalho.php';
?>
<header>
    <link rel="stylesheet" href="listar.css">
</header>
<body>    
    <div class="container">
        <h2>LISTAGEM DE PRODUTOS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$produto['id']."</td>";
                    echo "<td>".$produto['nome']."</td>";
                    echo "<td>".$produto['preco']."</td>";
                    echo "<td>".$produto['quantidade']."</td>";
                    echo "
                    <td>
                        <div class='btn-group' role='group'>
                            <a href='form_atualizar.php?id=".$produto['id']."' type='button' class='btn btn-primary'>Atualizar</a>
                            <a href='apagar.php?id=".$produto['id']."' type='button' class='btn btn-danger'>Apagar</a>
                        </div>
                    </td>
                    ";
                    echo "</tr>";                                        
                }
            ?>                                
            </tbody>
        </table>
    </div>
</body>
</html>