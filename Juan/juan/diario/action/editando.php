<?php
    require_once('../../conexao.php');

    
    $pensamento=$_POST['pensamento'];
    $id=$_POST['id'];
    
    $query='UPDATE diario SET mensagem ="'.$pensamento.'" WHERE idDiario ='.$id;

    

    $result=mysqli_query($conexao,$query);
    
    header('Location:../index.php')
?>