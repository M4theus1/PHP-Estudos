<?php 

function calculaMedia($nota){
    $total = 0;
    $resultado = 0;
    $nota = [];
    for ($i=0; $i < count($nota); $i++){
        $nota[$i] = readline("Digite sua ". $i++ ."° nota:  ");
        $resultado = $resultado + $nota[$i];
        $total = $resultado / 4;
        return $total;
        $i+1;
    }

}
echo calculaMedia($nota);
?>