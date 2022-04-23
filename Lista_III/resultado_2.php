<?php
$achou=false;
$x=$_POST['x'];
$vetor = array($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5'],
 $_POST['n6'],$_POST['n7'], $_POST['n8'], $_POST['n9'], $_POST['n10'],
 $_POST['n11'],$_POST['n12'], $_POST['n13'], $_POST['n14'], $_POST['n15'],
 $_POST['n16'],$_POST['n17'], $_POST['n18'], $_POST['n19'], $_POST['n20']);
for($i=0; $i<20; $i++){

    if($vetor[$i]==$x){
        $achou=true;
        $pos=$i;
        
    }
 
}
if($achou==true){
    echo "O valor de x=$x foi encontrado e ele está na posição $pos";
}
else{
    echo "O valor x=$x não foi encontrado";
}