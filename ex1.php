<?php
    function area ($raio){
        $area = $raio *$raio *PI;
        DEFINE('PI',3.14);
        $raio = rand(1,300);
        return $area;
}
echo "A area da circunferencia com raio".$raio."e".area($raio);

?>
