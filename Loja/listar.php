<?php 
    include 'cabecalho.php';
?>

<head>
    <link rel="stylesheet" href="listar.css">
</head>

  <div class="container">
     <table class="table">
   <thead>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">NOME</th>
       <th scope="col">PREÇO</th>
       <th scope="col">QUANTIDADE</th>
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
        <div class='btn-group' role='group' aria-label='Basic mixed styles  example'>
            <a href='form_atualizar.php?id=".$produto['id']."' type='button' class='btn btn-danger'>Atualizar</a>
            <a href='#' type='button' class='btn btn-warning'>apagar</a>
        </div>
          </td>
          ";
       echo "</tr>";




     //echo "ID: " . $produto['id'] . "<br>";
     //echo "Nome: " . $produto['nome'] . "<br>";
     //echo "Preco: R$" . $produto['preco'] . "<br>";
     //echo "quantidade: " . $produto['quantidade'] . "<br><br>";
     }
?>


      </tbody>
    </table>
   </div>
  </body>
</html>