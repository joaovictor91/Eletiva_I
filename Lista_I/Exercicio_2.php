<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Exercício 2</title>
</head>
<body class="container">
<h1>Exercício 2</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="valor_produto">Informe o valor do produto:</label>
                <input id="valor_produto" name="valor_produto" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="quantidade_produto">Informe a quantidade do produto:</label>
                <input id="quantidade_produto" name="quantidade_produto" type="text" class="form-control">
            </div>
        </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
        </div>
        </div>
    </form>

    <div class="alert alert-primary" role="alert">
        Valor Final:
        <?php
            if (isset($_POST['valor_produto'])){
                $valor_produto = $_POST['valor_produto'];
                $quantidade_produto = $_POST['quantidade_produto'];
                echo $quantidade_produto * $valor_produto;
            }
        ?>

    </div>
    <br>       
    <div class="row">
            <div class="col">
                <a href="Exercicio_1.php">Exercicio 1 </a>
            </div>
            <div class="col">
                <a>Exercicio 2 </a>
            </div>
            <div class="col">
                <a href="Exercicio_3.php">Exercicio 3 </a>
            </div>
            <div class="col">
                <a href="Exercicio_4.php">Exercicio 4 </a>
            </div>
            <div class="col">
                <a href="Exercicio_5.php">Exercicio 5 </a>  
            </div>
        </div>
    </div>
    <br>
    <a href="Exercicios.php"> Lista com todos exercícios juntos</a>        




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>