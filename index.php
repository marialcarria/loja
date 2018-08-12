<?php include("cabecalho.php"); ?>

<?php
	/*$nome = $_GET["nome"];
	$array = array(1,2,3,4,5,6,7,8,9,10);
	
	function sum_array_values($array){
		$result = 0;
		for ($i=0; $i < sizeOf($array); $i++){
			$result = $result + $array[$i];
		}
		return $result;
	}
	$soma = sum_array_values($array);
	echo $soma;*/	
?>
<?php
	if(isset($_GET["login"]) && $_GET["login"]==true){?>
		<p class="alert-success">Logado com sucesso!</p><?php
	}
	if(isset($_GET["login"]) && $_GET["login"]==false){?>
		<p class="alert-danger">Usuário ou senha inválidos!</p><?php
	}
?>
	<h1>Bem vindo!</h1>
	  <h2>Login</h2>
        <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Login</button></td>
            </tr>
        </table>
        </form>
<?php include("rodape.php");