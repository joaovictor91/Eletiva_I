<?php require "../src/View/cabecalho.php"; ?>

<h1>Categorias</h1>

<?php
    session_start();
    if (isset($_SESSION['resultado'])) {
        $resultado = $_SESSION['resultado'];
        echo "<div class='alert alert-secundary'>$resultado </div>";
    }

?>

<a class="btn btn-success" href="/categorias/novo">Nova Categoria</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
    <?php

        while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td><?=$linha['id']?></td>
                    <td><?php echo $linha['descricao']; ?></td>
                    <td><a href="/categorias/alterar/<?=$linha['id']?>">Alterar</a></td>
                    <td><a href="/categorias/excluir/<?=$linha['id']?>">Excluir</a></td>
                </tr>
            <?php
        }

    ?>
    </tbody>
</table>

<?php require "../src/View/rodape.php"; ?>
