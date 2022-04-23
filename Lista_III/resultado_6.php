<?php
    $iguais=array();
    $vetor = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'],
    $_POST['n6'],$_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10']);
    $achou=false;
    for($i=0; $i<10; $i++){
        for($j=$i+1; $j<9;$j++){
            if($vetor[$i]==$vetor[$j]){
                $achou=true;
                if (in_array($vetor[$i],$iguais))
                {
                     //Não vai adicionar   
                }
                else//Vai adicionar
                {
                    array_push($iguais,$vetor[$i]);
                }
                
            
            }
        }
    
    }
    if($achou==true){
        echo "Existe números iguais e eles são: <br>";
        for($i=0; $i<count($iguais); $i++){
            echo "$iguais[$i]<br> ";

        }
    }
    else{
        echo "Não existe números iguais";
    }
    

