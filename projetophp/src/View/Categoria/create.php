<?php require "../src/View/cabecalho.php"; ?>

<h1>Nova Categoria</h1>

<form action="/categorias/salvar" method="POST">
    <div class="row">
        <div class="col">
            <label for="descricao">Informea descrição:</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>

    

</form>

<?php require "../src/View/rodape.php"; ?>