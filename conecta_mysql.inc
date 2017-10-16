<?php
$conexao = mysqli_connect('127.0.0.1', 'root', null, 'teste');

mysqli_set_charset($conexao, 'utf8');

if ($conexao->connect_error) {
	die ("Falha ao realizar a conexão: " . $conexao->connect_error);
}
?>