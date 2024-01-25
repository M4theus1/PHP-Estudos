<?php 
$n = [1, 1, 2, 2, 3, 4, 5];
$pesq = readline("Digite um número: ");
$rep = 0;

for ($i=0; $i < 8 ; $i++){
    if ($n[$i] == $pesq) {
        $rep += 1;
    }
}

echo "O número $pesq aparece $rep vezes na base de dados";

?>