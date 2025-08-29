 <?php include 'cabecalho.php'; 
 $id = $_GET['id'];

 
?>
<head>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="container">
        <h2>ATUALIZAÇÃO DE PRODUTO</h2>
        <?php
     require 'conexao.php';
     $sql = "SELECT * FROM produtos WHERE ID $id";
     $stmt = $pdo->query($sql);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC); 
       //echo "<tr>";
      //echo "<td>".$produto['id']."</td>";
      //echo "<td>".$produto['nome']."</td>";
      //echo "<td>".$produto['preco']."</td>";
      //echo "<td>".$produto['quantidade']."</td>";
      ?>
        <form action="#" method="POST">

            <div class="mb-3">
                Nome:<input value=
                "
                <?php
                   echo $produto['nome'];
                ?>
                "
                 type="text" name="produto" class="form-control" placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                Preço:<input type="text" name="preco" class="form-control" placeholder="Digite o preço do Produto">
            </div>
            <div class="mb-3 form-check">
                Quantidade:<input type="text" name="quantidade" class="form-control" placeholder="Digite a Quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>
