<?php
	include "conec.inc";
	$vcod=$_POST["F_Cod"];
	$vprod=$_POST["F_Prod"];
	$vpreco=$_POST["F_Preco"];
	$cqtde=$_POST["F_Qtde"];

	$inser="INSERT INTO tb_produtos2 VALUES ('$vcod','$vprod',$vpreco,$cqtde)";
	$res=mysqli_query($con,$inser);
	$linhas=mysqli_affected_rows($con);
	if($linhas == 1){
		echo "Registro gravado com sucesso";
	}else{
		echo "Falha na Gravação";
	}

	mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<title>Aula 31 Comandos Insert recebendo dados dos formularios </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
	<br/>
	<a href="form.html">Voltar</a>
</body>
</html>