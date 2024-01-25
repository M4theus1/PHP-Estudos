<?php 
$paises = ["brasil", "argentina", "chile", "uruguai", "paraguai"];
$pesquisa = readline("Informe um país: ");

for ($i=0; $i < 5; $i++) { 
    if ($paises[$i] == $pesquisa) {
        echo("País ". $paises[$i]. " encontrado!");
        break;
    }
    else {
        echo("País " .$pesquisa. " não encontrado");
        break;
    }
}

?>