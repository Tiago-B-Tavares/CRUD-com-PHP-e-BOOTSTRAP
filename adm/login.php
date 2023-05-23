<?php
	include_once ("../dao/manipuladados.php");
	session_start();

	$manipula = new manipuladados();
	
	$login = $_POST['txtNome'];
    $password = $_POST['txtSenha'];
	$manipula->setTable("tb_users");
	$linhas = $manipula->validarLogin($login,$password); 
       
	if($linhas == 0){
		echo '<script>alert("Usuário ou Senha do Adm não cadastrado ou incorreto(s) ");</script>';	
		echo "<script>location = 'telaLogin.php';</script>";
	}else{
		$_SESSION["usuario"] = $login;
		setcookie("nome_usuario",$login);
        setcookie("senha_usuario",$password);
        header("location: principal.php");
		
	}





?>