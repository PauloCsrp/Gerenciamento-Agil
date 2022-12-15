<?php
    require_once('../../conexao.php');

    $id=$_GET['id'];
    
   
    
    $sql='DELETE FROM mensagem WHERE idMensagem='.$id;
    $resultado=mysqli_query($conexao,$sql);

    

 
    
    header('Location:../msg.php')
?>