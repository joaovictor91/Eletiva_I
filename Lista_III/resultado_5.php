<?php
    $vetorpar=array();
    $vetorimpar= array();
    $vetor = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'],
    $_POST['n6'],$_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10']);
    for($i=0; $i<10; $i++){
        if($vetor[$i]%2==0){
            array_push($vetorpar,$i);
            echo "Par:  
            $vetor[$i]
            <br>";
        }
        else{
            array_push($vetorimpar,$i);
            echo "Impar:  
            $vetor[$i]
            <br>";
        }
    
    }
    if (count($vetorpar)>0)
    {
        echo "Posições dos números pares:";
        for($i=0; $i<count($vetorpar); $i++)
            {
                echo " <div> 
                $vetorpar[$i]
                </div><br>";
            }    
    }
    else
    {
        echo "Não existe números pares<br>";
    }
    

    
    if (count($vetorimpar)>0)
    {
        echo "Posições dos números impares:";
        for($i=0; $i<count($vetorimpar); $i++)
            {
                echo " <div> 
                $vetorimpar[$i]
                </div><br>";
            }    
    }
    else
    {
        echo "Não existe números impares<br>";
    }
    

