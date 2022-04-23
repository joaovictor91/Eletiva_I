<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Exercícios</title>
</head>
<body class="container">
<h1>Exercício 1</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="valor_pago">Informe o valor a ser pago:</label>
                <input id="valor_pago" name="valor_pago" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="valor_produto">Informe o valor do produto:</label>
                <input id="valor_produto" name="valor_produto" type="text" class="form-control">
            </div>
        </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
        </div>
        
        <div class="alert alert-primary" role="alert">
        Troco:
        <?php
            if (isset($_POST['valor_pago'])){
                $valor_pago = $_POST['valor_pago'];
                $valor_produto = $_POST['valor_produto'];
                $troco=$valor_pago - $valor_produto;
                if($troco>0){
                    echo "R$$troco";
                }
                else if($troco==0){
                    echo "R$$troco não teve troco";
                }
                else if ($troco<0){
                    echo "R$$troco faltam";
                }

            }
        ?>
        </div>
    </div>
    </form>
    <hr style="height:4px;border-width:0;color:black;background-color:black">
    <h1>Exercício 2</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="valor_produto2">Informe o valor do produto:</label>
                <input id="valor_produto2" name="valor_produto2" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="quantidade_produto2">Informe a quantidade do produto:</label>
                <input id="quantidade_produto2" name="quantidade_produto2" type="text" class="form-control">
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
            if (isset($_POST['valor_produto2'])){
                $valor_produto = $_POST['valor_produto2'];
                $quantidade_produto = $_POST['quantidade_produto2'];
                echo $quantidade_produto * $valor_produto;
            }
        ?>

    </div>
    <hr style="height:4px;border-width:0;color:black;background-color:black">
    <h1>Exercício 3</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="n">Informe um valor:</label>
                <input id="n" name="n" type="text" class="form-control">
            </div>
            
        </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
        </div>
        </div>
    </form>

    <div class="alert alert-primary" role="alert">
        Resultado:
        <?php
            if (isset($_POST['n'])){
                $n = $_POST['n'];
                if($n>10){
                    echo "O $n informado é maior que 10";
                }
                else if($n==10){
                    echo "O valor digtado foi $n";
                }
                else if ($n<10){
                    echo "O $n informado é menor que 10";
                }

            }
        ?>

    </div>
    <hr style="height:4px;border-width:0;color:black;background-color:black">
    <h1>Exercício 4</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="n">Informe um valor:</label>
                <input id="n" name="n" type="text" class="form-control">
            </div>
            
        </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
        </div>
        </div>
    </form>

    <div class="alert alert-primary" role="alert">
        Resultado:
        <?php
            if (isset($_POST['n'])){
                $n = $_POST['n'];
                if($n>0){
                    echo "O $n é Positivo";
                }
                else if($n==0){
                    echo "O valor é zero";
                }
                else if ($n<0){
                    echo "O $n é negativo";
                }

            }
        ?>

    </div>
    <hr style="height:4px;border-width:0;color:black;background-color:black">
    <h1>Exercício 5</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="n1">Informe a primeira nota:</label>
                <input id="n1" name="n1" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="n2">Informe a segunda nota:</label>
                <input id="n2" name="n2" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="n3">Informe a terceira nota:</label>
                <input id="n3" name="n3" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="n4">Informe a quarta nota:</label>
                <input id="n4" name="n4" type="text" class="form-control">
            </div>
        </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
        </div>
        </div>
    </form>

    <div class="alert alert-primary" role="alert">
        A Média:
        <?php
            if (isset($_POST['n1'])){
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];
                $n4 = $_POST['n4'];
                $media=($n1 + $n2 + $n3 + $n4)/4;
                if($media>7.0){
                    echo "A $media e o aluno foi aprovado";
                }
                else{
                    echo "A $media e o aluno foi reprovado";
                }
            }
        ?>
    
    </div> 
    <hr style="height:4px;border-width:0;color:black;background-color:black">       
 
        
    <div class="row">
            <div class="col">
                <a href="Exercicio_1.php">Exercicio 1 </a>
            </div>
            <div class="col">
                <a href="Exercicio_2.php">Exercicio 2 </a>
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
    <a> Lista com todos exercícios juntos</a>                



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>