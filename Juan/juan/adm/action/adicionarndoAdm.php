<?php
    require_once('../../conexao.php');

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $senha=$_POST['senha'];
    $acesso=$_POST['acesso'];



    $query='INSERT INTO usuario (nome, telefone, email, senha, idAcesso ) 
    VALUES ("'.$nome.'","'.$telefone.'","'.$email.'","'.$senha.'","'.$acesso.'")';

    $result=mysqli_query($conexao,$query);
    
    header('Location:../adm.php')
?>