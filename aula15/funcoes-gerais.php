<?php

// Verifica se é núm. primo ou não:
function primo($n){
    $c = 0;
    
    for($i=1; $i<=$n; $i++) {
        if ($n % $i == 0){
            $c ++;
        }
    }

    if($c == 2){
        return " É PRIMO";
    } else{
        return " NÃO É PRIMO";
    }
}

// Somando vários valores c/ parâmetros dinâmicos:
function soma() {
        $lst = func_get_args();
        $qtde = func_num_args();
        $soma = 0;
        
        for($i=0; $i<$qtde; $i++){
            $soma +=$lst[$i];
        }
        return $soma;
}
?>