<?php
    require_once('../../conexao.php');

    
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $senha=$_POST['senha'];
    $id=$_POST['id'];
    $acesso=$_POST['acesso'];
    
    $query='UPDATE usuario SET email ="'.$email.'", telefone ="'.$telefone.'", senha ="'.$senha.'", idAcesso ="'.$acesso.'" WHERE idUsuario ='.$id;

    

    $result=mysqli_query($conexao,$query);
    
    if($nivel==1){
        header('location:../index.php');
    }else
        {
            header('location:../adm.php');
}
    ?>