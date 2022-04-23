<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Exercício 6</title>
</head>
<body class="container">
    <h1>Exercício 6</h1>
    <h2>Informe  Peso e uma Altura</h2>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="peso">Informe um peso:</label>
                <input id="peso" name="peso" type="text"required>
            </div>
            <div class="col">
                <label for="altura">Informe uma altura:</label>
                <input id="altura" name="altura" type="text" required>
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

        if((isset($_POST['peso']) && isset($_POST['altura'])))
        {
            $peso=$_POST['peso'];
            $altura=$_POST['altura'];

            function Imc($peso,$altura) 
            {
                $imc=$peso/($altura*$altura);
                if($imc<=18.5)
                {
                    echo "abaixo do peso $imc";
                }
                else if($imc>=18.5 && $imc<24.9)
                {
                    echo "Peso ideal $imc";
                }
                else if($imc>=25 && $imc<29.9)
                {
                    echo "Levemente acima do peso $imc";
                }
                else if($imc>=30 && $imc<34.9)
                {
                    echo "Obesidade grau I $imc";
                }
                else if($imc>=35 && $imc<39.9)
                {
                    echo "Obesidade grau II $imc";
                }
                else if($imc>=40)
                {
                    echo "Obesidade grau III $imc";
                }
            }
            echo Imc($peso,$altura);
            
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
                <a href="Exercicio_5.php">Exercicio 5 </a>  
            </div>
            <div class="col">
                <a>Exercicio 6 </a>
            </div>
        </div>
    </div>
   





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>