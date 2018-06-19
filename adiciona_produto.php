<?php 
include("cabecalho.php"); 
include("conecta.php"); 
include("banco_produto.php"); 
?>
<?php

$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
	$usado = "true";	
} else {
	$usado = "false";
}

if(insereProduto($conexao, $produto, $preco, $descricao, $categoria_id, $usado)){ ?>
	<p class="text-success">Produto <?=$produto;?> no valor de <?=$preco;?> adicionado com sucesso.</p>
<?php } else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">O produto não foi adicionado. Erro: <?= $msg; ?></p>
<?php }
?>

<?php include("rodape.php"); ?>
