<?php require "../src/View/cabecalho.php";
    while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
?>

<h1>Alterar Categoria</h1>

<form action="/categorias/atualizar/<?=$linha['id']?>" method="POST">
    <div class="row">
        <div class="col">
            <label for="descricao">Informe a descrição:</label>
            <input value="<?= $linha['descricao']?>" type="text" class="form-control" name="descricao" id="descricao"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
    </div>
</form>

<?php }
require "../src/View/rodape.php"; ?>
