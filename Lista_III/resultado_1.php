<?php
$x=$_POST['x'];
$y=$_POST['y'];
$soma=$x+$y;
if($x == 1 || $y==1){
    $x=0;
    $y=0;
}

if($y ==10 || $x==10){
    $y=9;
    $x=9;

}
$vetor = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'],
 $_POST['n6'],$_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10']);

 $encontrado=false;
 if($soma<10 || $soma>=0){
    for($i=0; $i<10; $i++){
        if($soma==$vetor[$i]){
            $encontrado=true;
            $posicao=$i;
            
        }
        
    }
    
 } 
 if ($encontrado==true){
    echo "Valor foi encontrado!!"; 
    echo " Valor da soma do x + y = $soma <br> E sua posição é $posicao";
 }
 else{
    echo "Não foi possível localizar o valor"; 
 }
