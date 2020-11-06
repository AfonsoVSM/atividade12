<?php
soma = 0;
$Rapazes = rand(1,30);
$Raparigas = rand(1,30);
Percentagem(Raparigas,Rapazes);
    
function Percentagem ($Rapazes,$Raparigas){
    $soma =Raparigas + Rapazes;
    $numrapazes =($Rapazes/$soma)*100;
    echo "o numero de rapazes é" .$numrapazes;
    $numraparigas =($Raparigas/$soma)*100;
    echo "o numero de raparigas é".$numraparigas;  
        
}
?>