<?php
include("cabecalho.php"); 
include("conecta.php"); 
include("banco_categoria.php"); 
include("banco_produto.php"); 
$categorias = listaCategorias($conexao);

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
	<h1>Alterando produto</h1>
	<form action="altera_produto.php" method="POST">
		<table class="table">
			<input type="hidden" name="id" value="<?=$produto['id']?>">
			<tr>
				<td>Nome: </td>
				<td><input class="form-control" type="text" name="produto" value="<?=$produto['nome']?>"></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"></td>
			</tr>
			<tr>
				<td>Descriçao:</td>
				<td><textarea class="form-control" name="descricao" ><?=$produto['descricao']?></textarea></td>
			</tr>	
			<tr>
				<td>Categoria:</td>
			    <td>
			    	<select name="categoria_id" class="form-control">
				        <?php foreach($categorias as $categoria) : 
				        	$categ_selecionada = $produto['categoria_id'] == $categoria['id'];
				        	$selecao = $categ_selecionada ? "selected='selected'" : "";
				        	?>
				        	<option value="<?=$categoria['id']?>" <?=$selecao?>>
			        			<?=$categoria['nome']?>
			        		</option>
				        <?php endforeach ?>
			        </select>
			    </td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" value="true" <?=$usado?>> Usado</td>
			</tr>	
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Alterar"></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>