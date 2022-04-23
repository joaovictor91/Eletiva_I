<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Exercício 3</title>
</head>
<body class="container">
    <h1>Exercício 3</h1>
    <h2>Informe cinco Números</h2>
    <form action="" method="post">
    <div class="row">
            <div class="col">
                <label for="n1">Informe numero:</label>
                <input id="n1" name="n1" type="text" class="form-control" required>
            </div>
            <div class="col">
                <label for="n2">Informe outro numero:</label>
                <input id="n2" name="n2" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n3">Informe outro numero:</label>
                <input id="n3" name="n3" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n4">Informe outro numero:</label>
                <input id="n4" name="n4" type="text" class="form-control" required>
            </div> 
            <div class="col">
                <label for="n5">Informe outro um numero:</label>
                <input id="n5" name="n5" type="text" class="form-control" required>
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
         isset($_POST['n4']) && isset($_POST['n5']))
        {
            $n1=$_POST['n1'];
            $n2=$_POST['n2'];
            $n3=$_POST['n3'];
            $n4=$_POST['n4'];
            $n5=$_POST['n5'];
            
           
            
            $vetor = array($n1, $n2, $n3, $n4, $n5);
            

            function vetor_soma($vetor)
            {
                
                for($i=0; $i<count($vetor); $i++){
                    $soma=0;
                    if($vetor[$i]>0){
                        $valor=$vetor[$i];
                        for($aux=1;$aux<$valor;$aux++)
                        {
                            if($valor%$aux==0){
                                $soma+=$aux;
                            }
                        }
                        echo "A soma dos divisores do $valor é de: $soma<br>";     
                    }
                    else
                    {
                        $valor=$vetor[$i];
                        echo "O valor $valor é negativo<br>";  
                        $soma=0;
                        
                    }
                    
                    $soma=0;
                }
            }
            echo vetor_soma($vetor);
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
                <a>Exercicio 3 </a>
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