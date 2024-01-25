<?php 
    $paises = ["brasil", "chile", "argentina", "uruguai", "paraguai" ];
    $resp = readline("Escolha um país: ");
    

    for ($i=0; $i <= 5; $i++) { 
        if ($paises[$i] == $resp) {
            echo "País " . $paises[$i] . " encontrado!";
            break;
        }else {
            echo "País ". $paises[$i] . "não encontrado";
            break;
        }
        
    }
?>