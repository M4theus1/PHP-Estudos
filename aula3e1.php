<?php 
$numeros = [];
$soma = 0; 

for ($i=0; $i < 5; $i++) { 
   $numeros[$i] = readline("Escreva o ". $i+1 ." número: ");
   $soma += $numeros[$i];
}

for ($i = count($numeros) - 1; $i >= 0 ; $i--) { 
    echo "$numeros[$i] \n";
}

echo "Soma: $soma";
?>