<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Exercício 5</title>
</head>
<body class="container">
<h1>Exercício 5</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="partido1">Informe o nome do partido:</label>
                <input id="partido1" name="partido1" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="votos1">Informe a quantidade de votos:</label>
                <input id="votos1" name="votos1" type="text" class="form-control">
            </div>    
            
        </div>
        <div class="row">
            <div class="col">
                <label for="partido2">Informe o nome do partido:</label>
                <input id="partido2" name="partido2" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="votos2">Informe a quantidade de votos:</label>
                <input id="votos2" name="votos2" type="text" class="form-control">
            </div>    
            
        </div>
        <div class="row">
            <div class="col">
                <label for="partido3">Informe o nome do partido:</label>
                <input id="partido3" name="partido3" type="text" class="form-control">
            </div>
            <div class="col">
                <label for="votos3">Informe a quantidade de votos:</label>
                <input id="votos3" name="votos3" type="text" class="form-control">
            </div>    
            
        </div>
        
        
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
        </div>
        </div>
    </form>

    <div class="alert alert-primary" role="alert" class="resultado">
        Resultado:
        <?php
            
            if (isset($_POST['partido1'])){
                $partido1 = $_POST['partido1'];
                $votos1 = $_POST['votos1'];
                $partido2 = $_POST['partido2'];
                $votos2 = $_POST['votos2'];
                $partido3 = $_POST['partido3'];
                $votos3 = $_POST['votos3'];
                $total=$votos1+$votos2+$votos3;
                $qtd1=($votos1/$total)*100;
                $qtd2=($votos2/$total)*100;
                $qtd3=($votos2/$total)*100;

                echo "O $partido1 teve %$qtd1, $partido2 teve $qtd2 e o $partido3 teve $qtd3";
            }
        ?>

    </div>
    <br>
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
                <a>Exercicio 5 </a>  
            </div>
        </div>
    </div>
   





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>