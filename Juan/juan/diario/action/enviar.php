<?php
    require_once('../../conexao.php');

    $assunto=$_POST['assunto'];
    $explique=$_POST['explique'];
    $email=$_POST['email'];
    


    $query='INSERT INTO mensagem (assunto, explique, emailUsu ) 
    VALUES ("'.$assunto.'","'.$explique.'","'.$email.'")';

    $result=mysqli_query($conexao,$query);
    
    header('Location:../index.php')
?>