<?php
    require_once('../../conexao.php');

    
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $senha=$_POST['senha'];
    $id=$_POST['id'];
    
    $query='UPDATE usuario SET email ="'.$email.'", telefone ="'.$telefone.'", senha ="'.$senha.'" WHERE idUsuario ='.$id;

    

    $result=mysqli_query($conexao,$query);
    
    header('Location:../index.php')
?>