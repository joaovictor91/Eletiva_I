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
    <h2>Informe um Número</h2>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="n1"></label>
                <input id="n1" name="n1" type="text"required>
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

        if((isset($_POST['n1'])))
        {
            $n1=$_POST['n1'];


            function positivo_ou_negativo($n1) : int
            {
                if($n1>0)
                {
                    
                    return 1;
                    
                }
                elseif($n1<0)
                {
                    
                    return -1;
                    
                }
                else
                {
                    
                    return 0;
                    
                }
            }
            
            if(positivo_ou_negativo($n1)==1)
            {
                echo "Número digtado foi $n1 é positivo";
                
            }
            elseif(positivo_ou_negativo($n1)==-1)
            {
                echo "Número digtado foi $n1 é negativo";
            }
            else 
            {
                echo "Número digtado foi zero";
            }
            function par_ou_impar($n1) : bool
            {
                if($n1%2==0)
                {
                    return true;
                    
                }
                else
                {
                    return false;
                   
                }
            }
            
            if(par_ou_impar($n1))
            {
                echo " e tambem é par";
            }
            else
            {
                echo " e tambem é impar";
            }
            
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
            <div class="col">
                <a href="Exercicio_6.php">Exercicio 6 </a>
            </div>
        </div>
    </div>
   





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>