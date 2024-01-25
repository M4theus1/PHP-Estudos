<?php 
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$m1 = array(
    array(1, 2, 3),
    array(4, 5, 6)
);

$teste = [];
$i = 0;

for ($i=0; $i < 2; $i++) {
    $teste[0][$i] = readline("Digite sua primeira nota da " . $i + 1 . "° unidade: ");
    $teste[0][$i + 1] = readline("Agora, a segunda nota da " . $i + 1 . "° unidade: ");  
    $i++;  
};

print_r("Sua média do primeiro semestre foi: " . ($teste[0][0] + $teste[0][1])/2);

?>