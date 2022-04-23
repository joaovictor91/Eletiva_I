<?php
$par=0;
$vetor = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'],
 $_POST['n6'],$_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10'],
 $_POST['n11'],$_POST['n12'], $_POST['n13'], $_POST['n14'], $_POST['n15']);
for($i=0; $i<15; $i++){

    if($vetor[$i]%2==0){
        $par++;
        
    }
 
}
if($par>0){
    echo "Número pares no vetor $par";
}
else{
    echo "Não existe números pares no vetor";
}