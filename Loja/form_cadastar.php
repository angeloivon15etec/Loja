<?php include 'cabecalho.php'; ?>
<body>
    <div class="container">
        <h2>CADASTRO DE PRODUTO</h2>
        <form action="inserir.php" method="POST">

            <div class="mb-3">
                <input type="text" name="nome" class="form-control" placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do Produto">
            </div>
            <div class="mb-3 form-check">
                <input type="text" name="quantidade" class="form-control" placeholder="Digite a Quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
