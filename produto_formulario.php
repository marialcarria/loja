<?php
include("cabecalho.php"); 
include("conecta.php"); 
include("banco_categoria.php"); 
$categorias = listaCategorias($conexao);
?>
	<h1>Formulário de cadastro</h1>
	<form action="adiciona_produto.php" method="POST">
		<table class="table">			
			<tr>
				<td>Nome: </td>
				<td><input class="form-control" type="text" name="produto"></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco"></td>
			</tr>
			<tr>
				<td>Descriçao:</td>
				<td><textarea class="form-control" name="descricao"></textarea></td>
			</tr>	
			<tr>
				<td>Categoria:</td>
			    <td>
			    	<select name="categoria_id" class="form-control">
				        <?php foreach($categorias as $categoria) : ?>
				        	<option value="<?=$categoria['id']?>">
			        			<?=$categoria['nome']?>
			        		</option>
				        <?php endforeach ?>
			        </select>
			    </td>
			</tr>	
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" value="true"> Usado</td>
			</tr>	
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>