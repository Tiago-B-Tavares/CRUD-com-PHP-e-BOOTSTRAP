<?php
	include_once ("../dao/manipuladados.php");
	$manipula = new manipuladados();
	//verifica se a variável foi iniciada
	if (IsSet($_COOKIE["nome_usuario"]))
	 $nome_usuario = $_COOKIE["nome_usuario"];
	 
	if (IsSet($_COOKIE["senha_usuario"]))
	 $senha_usuario = $_COOKIE["senha_usuario"];

	if (!(empty($nome_usuario) or empty($senha_usuario)))
	{
		
		$manipula->setTable('tb_user_admin');
		$linhas = $manipula->validarLogin($nome_usuario,$senha_usuario);

                if($linhas == 0)
				{
					setcookie("nome_usuario");
					setcookie("senha_usuario");
					header("location: telaLogin.php");
					exit;		
				}
				
	 }
	 else
	 {
			
                        header("location: telaLogin.php");
			exit;	 
	 }

?>