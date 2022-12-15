<?php
    require_once('../../conexao.php');

    $id=$_GET['id'];
    
   
    
    $sql='DELETE FROM diario WHERE idDiario='.$id;
    $resultado=mysqli_query($conexao,$sql);

    

 
    
    header('Location:../index.php')
?>