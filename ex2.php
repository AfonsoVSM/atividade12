<?php
function ParImpar($num){
    if($num % 2==0){
        return true;
    }
    else{
         return false;
    }        
}
$n = rand(1,50000);
if (par($n)){
    echo $n. 'é par';
}
else{
    echo $n. 'é impar';
}