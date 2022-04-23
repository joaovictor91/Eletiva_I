<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Exercício 4</title>
</head>
<body class="container">
<h1>Exercício 4</h1>
    <form method="post" action="">
        <div class="row">
            <div class="col">
                <label for="na">Informe quantidade de adultos para a mesa:</label>
                <input id="na" name="na" type="text" class="form-control">
            </div>
            <div class="row">
            <div class="col">
                <label for="nc">Informe quantidade de crianças para a mesa:</label>
                <input id="nc" name="nc" type="text" class="form-control">
            </div>

            
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
            
            if (isset($_POST['na'])){
                $na = $_POST['na'];
                $nc = $_POST['nc'];
                $adulto=20*$na;
                $crianca=12*$nc;
                $total=$adulto+$crianca;    
                echo "O Adutos R$$adulto Crianças R$$crianca e Total R$$total";
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
                <a>Exercicio 4 </a>
            </div>
            <div class="col">
                <a href="Exercicio_5.php">Exercicio 5 </a>  
            </div>
        </div>
    </div>
   





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>