<?php


require_once('../conexao.php');



if(isset($_POST['email']) && isset($_POST['senha'])){

	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$sql=("SELECT * FROM usuario WHERE email='$email' and senha='$senha'");
	$consulta=mysqli_query($conexao,$sql);	
	$contador=mysqli_num_rows($consulta);

	if($contador==1) {
		while($dados=mysqli_fetch_array($consulta)){
			session_start();
			$acesso=$dados['idAcesso'];
			$_SESSION['idUsuario'] = $dados['idUsuario'];
			



			if($acesso == '1'){
				$_SESSION['usu']="usu";
				header('Location:../diario/index.php');
			}else


            if($acesso == '2'){
				$_SESSION['adm']="adm";
				header('Location:../adm/index.php');
				}
			
			
		}

	}
	else{
		session_start();
		$_SESSION['erro']=true;
		header('Location:../index.html');
	}
}
?>