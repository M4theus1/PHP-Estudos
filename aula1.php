<?php 
$nota = [];
$nome = readline("Digite seu nome: "); 

echo "Olá, $nome!" . "\n";

$i = 0; 

while ($i <= 3) {
    $nota[$i] = readline("Escreva sua " . ($i + 1) . "° nota: "); 
    $i = $i + 1;
}

$media = ($nota[0] + $nota[1] + $nota[2] + $nota[3]) / 4;

echo "$media"; 

?>