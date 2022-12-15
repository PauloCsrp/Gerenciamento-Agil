<?php


//require_once(__DIR__.'/query_mysql.php');
//require_once(__DIR__.'/models/usuario_model.php');
//require_once(__DIR__.'/models/usuarios_model.php');
//require_once(__DIR__.'/constants.php');



$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'juan';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if (mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error());
};