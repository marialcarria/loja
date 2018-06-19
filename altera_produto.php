<?php 
include("cabecalho.php"); 
include("conecta.php"); 
include("banco_produto.php"); 
?>
<?php

$id = $_POST["id"];
$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];

if(array_key_exists('usado', $_POST)){
	$usado = "true";	
} else {
	$usado = "false";
}

if(alteraProduto($conexao, $id, $produto, $preco, $descricao, $categoria_id, $usado)){ ?>
	<p class="text-success">Produto <?=$produto;?> no valor de <?=$preco;?> alterado com sucesso.</p>
<?php } else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">O produto não foi alterado. Erro: <?= $msg; ?></p>
<?php }
?>

<?php include("rodape.php"); ?>
