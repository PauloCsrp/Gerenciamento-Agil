<?php
    require_once('../../conexao.php');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $senha=$_POST['senha'];


    $query='INSERT INTO usuario (nome, telefone, email, senha ) 
    VALUES ("'.$nome.'","'.$telefone.'","'.$email.'","'.$senha.'")';

    $result=mysqli_query($conexao,$query);
    
    header('Location:../index.php')
?>