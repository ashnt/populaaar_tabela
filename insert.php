<?php 
$zero_time = microtime(true);

include_once('connect.php');
include_once('functions.php');

$start_time = microtime(true);

conectar($conexao);

set_time_limit(0);

$qtd_registros = 50;

for ($i = 0; $i < $qtd_registros ; $i++){
    $user = gerar_usuario();
    $pass = gerar_senha();
    inserir($conexao,$user, $pass);
}

$end_time = microtime(true);
$insert_time = round($end_time - $start_time, 2);
$total_time = round($end_time - $zero_time, 2);
$register_time = round($insert_time/$qtd_registros, 4);

quebrar_linha(2);
echo "Populando tabela com: ".$qtd_registros." registros";
quebrar_linha(1);
echo "Tempo de processamento do insert: ".gmdate("H:i:s", $insert_time);
quebrar_linha(1);
echo "Tempo de processamento total: ".gmdate("H:i:s", $total_time);
quebrar_linha(1);
echo "Insert de aproximadamente: ".$register_time." segundos por registro";
quebrar_linha(1);
echo "Último usuario: ".$user."<br>"."Última senha: ".$pass;


