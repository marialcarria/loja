<?php 
include("conecta.php");
include ("banco_usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario==NULL){
	header("Location: index.php?login=0");
} else{
	header("Location: index.php?login=1");
}
//var_dump($usuario);
