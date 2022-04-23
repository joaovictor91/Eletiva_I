<?php require "../src/View/cabecalho.php"; ?>

<h1> Produto</h1>

<?php
    session_start();
    if (isset($_SESSION['resultado'])) {
        $resultado = $_SESSION['resultado'];
        echo "<div class='alert alert-secundary'>$resultado </div>";
    }

?>

<a class="btn btn-success" href="/produtos/novo">Novo Produto</a>



<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Codigo Produto</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
    <?php

        while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td><?=$linha['codigoproduto']?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['valor']; ?></td>
                    <td><?php echo $linha['quantidade']; ?></td>
                    <td><?php echo $linha['tipo']; ?></td>
                    <td><a href="/produtos/alterar/<?=$linha['codigoproduto']?>">Alterar</a></td>
                    <td><a href="/produtos/excluir/<?=$linha['codigoproduto']?>">Excluir</a></td>
                </tr>
                    
                </tr>
            <?php
        }

    ?>
    </tbody>


</table>

<?php require "../src/View/rodape.php"; ?>