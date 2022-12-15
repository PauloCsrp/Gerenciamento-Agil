<?php
    require_once('../../conexao.php');

    $dt=$_POST['data'];
    $pensamento=$_POST['pensamento'];
    $id=$_POST['id'];
    


    $query='INSERT INTO diario (dia, mensagem, idUsuario ) 
    VALUES ("'.$dt.'","'.$pensamento.'","'.$id.'")';

    $result=mysqli_query($conexao,$query);
    
    header('Location:../index.php')
?>