<?php
	
	require_once("config.php");
	
	// Carrega um usuario
	//$root = new Usuario();
	//$root->loadbyId(3);
	//echo $root;

	//Carrega uma lista
	//$lista = usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login 
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	$usuario = new Usuario();
	$usuario->login("root", "!@#$");

	echo $usuario;
?>