<?php require "../src/View/cabecalho.php";
while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
    ?>

    <h1>Excluir Categoria</h1>

    <form action="/categorias/remover/<?=$linha['id']?>" method="POST">
        <div class="row">
            <div class="col">
                <label for="descricao">Informe a descrição:</label>
                <input disabled value="<?= $linha['descricao']?>" type="text" class="form-control" name="descricao" id="descricao"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Excluir</button>
            </div>
        </div>
    </form>

<?php }
require "../src/View/rodape.php"; ?>
