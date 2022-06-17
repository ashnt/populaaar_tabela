<?php 
//conversor de tempo
$segundos = 1800; //equivale a 30s
echo gmdate("H:i:s", $segundos);

function quebrar_linha($n_linhas){
    if ($n_linhas == 1){
        echo "<br>";
    } elseif($n_linhas == 2){
        echo "<br>";
        echo "<br>"; 
    }
    
}
echo 'teste0';
quebrar_linha(1);
echo 'teste';
quebrar_linha(2);
echo 'teste 2'; 