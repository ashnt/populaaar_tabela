<?php
$servidor = "localhost";
$usuario = "root";
$senha = "cfqt218f@";
$dbname = "db";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

function conectar($conexao){
	if($conexao){
	echo '[Banco Conectado]<br/>';
	}
	else{
		echo 'Banco não conectado';
	}
}