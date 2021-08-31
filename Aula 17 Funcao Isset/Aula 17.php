<?php
//Isset serve para verificar se a variavel foi declarada
	

	//Nesse exemplo o nome da Vindo do method post do formulario e o isset esta verificando se a variavel $_POST["f_nome"] esta definido 
	if(isset($_POST["f_nome"])){
		$vnome=$_POST["f_nome"];
		echo "Variavel ".$vnome." Foi Definida";
	}else{
		echo "Variavel Não Definida";
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 17 Funçao Isset</title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior">
</head>
<body>
	<br/>
	<form name="f_aula" method="post" action="Aula 17.php">
		<label>Nome:</label><br/>
		<input type="text" name="f_nome"/><br/>
		<input type="submit" value="Enviar"/><br/>
	</form>
</body>
</html>
<?php 
	}
?>