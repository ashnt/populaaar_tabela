<?php 

function inserir($conexao, $user, $pass){
	$dados_inserir = "INSERT INTO usuarios (Usuario, Senha)
	VALUES ('$user', '$pass')
	";

	mysqli_query($conexao, $dados_inserir);
}

function gerar_usuario(){
    $base_alfa = range('A','Z');
    $base_char = ['$','@','#','&','%','?'];
    $user_base = []; 
    $user_rand = rand(0,25);
    $user_base[0] = $base_alfa[$user_rand];
    $user_rand = rand(0,5);
    $user_base[1] = $base_alfa[$user_rand];
    $user_base[2] = rand(1000000,1000000000);
    $user_rand = rand(0,5);
    $user_base[3] = $base_char[$user_rand];
    $user_rand = rand(0,5);
    $user_base[4] = $base_char[$user_rand];
    $user = implode("",$user_base);
    return $user;
}

function gerar_senha(){
    $base_alfa = range('a','z');
    $base_char = ['$','@','#','&','%','?'];
    $pass_base = [];
    $pass_rand = rand(0,25);
    $pass_base[0] = $base_alfa[$pass_rand];
    $pass_base[1] = rand(1000000,1000000000);
    $pass_rand = rand(0,5);
    $pass_base[2] = $base_char[$pass_rand];
    $pass_rand = rand(0,5);
    $pass_base[3] = $base_char[$pass_rand];
    $pass = implode("",$pass_base);
    return $pass;
}

function quebrar_linha($n_linhas){
    if ($n_linhas == 1){
        echo "<br>";
    } elseif($n_linhas == 2){
        echo "<br>";
        echo "<br>"; 
    }elseif($n_linhas == 3){
        echo "<br>";
        echo "<br>"; 
        echo "<br>"; 
    }else{
        echo "";
    }
}