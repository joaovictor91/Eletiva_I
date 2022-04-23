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
    <h2>Informe nome de dez Alunos</h2>
    <form action="" method="post">
    <div class="row">
            <div class="col">
                <label for="n1">Informe nome:</label>
                <input id="n1" name="n1" type="text" class="form-control" required>
            </div>
            <div class="col">
                <label for="n2">Informe outro nome:</label>
                <input id="n2" name="n2" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n3">Informe outro nome:</label>
                <input id="n3" name="n3" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n4">Informe outro nome:</label>
                <input id="n4" name="n4" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n5">Informe outro um nome:</label>
                <input id="n5" name="n5" type="text" class="form-control" required>
            </div>
  
        </div>
        <div class="row">
            <div class="col">
                <label for="n6">Informe outro nome:</label>
                <input id="n6" name="n6" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n7">Informe outro nome:</label>
                <input id="n7" name="n7" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n8">Informe outro nome:</label>
                <input id="n8" name="n8" type="text" class="form-control" required>
            </div>
            <div class="col">
                <label for="n9">Informe outro nome:</label>
                <input id="n9" name="n9" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n10">Informe outro nome:</label>
                <input id="n10" name="n10" type="text" class="form-control" required>
            </div>     
        </div>
        
        <br>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Enviar</button>
        </div>
    </div>
    </form>
    <?php 

        if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3']) &&
         isset($_POST['n4']) && isset($_POST['n5']) && isset($_POST['n6']) 
        && isset($_POST['n7']) && isset($_POST['n8']) && isset($_POST['n9']) &&
        isset($_POST['n10']))
        {
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            $n3=$_POST['n3'];
            $n4=$_POST['n4'];
            $n5=$_POST['n5'];
            $n6=$_POST['n6'];
            $n7=$_POST['n7'];
            $n8=$_POST['n8'];
            $n9=$_POST['n9'];
            $n10=$_POST['n10'];
           
            
            $vetor = array($n1, $n2, $n3, $n4, $n5,$n6, $n7, $n8, $n9, $n10);
            

            function ordem_algabetica($vetor)
            {
                sort($vetor);
                for($i=0; $i<10; $i++){
                    echo "$vetor[$i]<br>";
        
                }
            }
            echo ordem_algabetica($vetor);
        }
        
        
        

    ?>


    </div>

    <br>
    <br>
    <br>
    <br>
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
            <div class="col">
                <a href="Exercicio_6.php">Exercicio 6 </a>
            </div>
        </div>
    </div>
   





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>