<?php 
$numeros = [1, 2, 4, 4, 4]; 
$pesq = readline("Digite um número: ");
$rep = 0; 

for ($i=0; $i < 5; $i++) { 
    if ($numeros[$i] == $pesq){
        $rep = $rep+1;        
    }
}

echo("O número " .$pesq. " apareceu " .$rep. " vezes");

?>