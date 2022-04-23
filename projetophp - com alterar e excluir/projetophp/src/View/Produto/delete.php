<?php require "../src/View/cabecalho.php"; 
   while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
?>

<h1>Excluir Produto</h1>

<form action="/produtos/remover/<?=$linha['codigoproduto']?>" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome">O nome do produto:</label>
            <input disabled value="<?= $linha['nome']?>" type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="col">
            <label for="valor">O valor do produto:</label>
            <input disabled value="<?= $linha['valor']?>" type="text" class="form-control" name="valor" id="valor">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="quantidade">A quantidade do produto:</label>
            <input disabled value="<?= $linha['quantidade']?>" type="text" class="form-control" name="quantidade" id="quantidade">
        </div>
        <div class="col">
            <label for="tipo">O  tipo do produto:</label>
            <input disabled value="<?= $linha['tipo']?>" type="text" class="form-control" name="tipo" id="tipo">
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