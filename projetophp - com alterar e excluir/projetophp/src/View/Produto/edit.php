<?php require "../src/View/cabecalho.php"; 
   while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
?>

<h1>Alterar Produto</h1>

<form action="/produtos/atualizar/<?=$linha['codigoproduto']?>" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome">Informe o nome do produto:</label>
            <input value="<?= $linha['nome']?>" type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col">
            <label for="valor">Informe o valor do produto:</label>
            <input value="<?= $linha['valor']?>" type="text" class="form-control" name="valor" id="valor">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="quantidade">Informe a quantidade do produto:</label>
            <input value="<?= $linha['quantidade']?>" type="text" class="form-control" name="quantidade" id="quantidade">
        </div>
        <div class="col">
            <label for="tipo">Informe o tipo do produto:</label>
            <input value="<?= $linha['tipo']?>" type="text" class="form-control" name="tipo" id="tipo">
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