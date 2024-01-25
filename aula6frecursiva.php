<?php 
function somatorio($v){
    if ($v == 1) {
        return $v;
        echo $v;
    }
    else {
        return $v + somatorio($v-1);
        echo $v;
    }
}

echo somatorio(6);

?>