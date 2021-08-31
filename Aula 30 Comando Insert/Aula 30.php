<?php
	include "conec.inc";

	$vnome="abreq";
	$vuser="sdqw";
	$vsenha="2qw231";
	$vmail="j3223@gmai.com";
	$vtel="312355543";
	$vst=3;
	$vobs="eqw";
//Serve para enserir um elemento especifivo nesse exemplo o nome
//so pode um por vez
	/*
	$sql="INSERT INTO tb_cadastro (nome) VALUES ('$vnome')";
	*/

	$sql="INSERT INTO tb_cadastro VALUES (NULL,'$vnome','$vuser','$vsenha','$vmail','$vtel',$vst,'$vobs')";//Serve para inserir varios valores
	
	$res=mysqli_query($con,$sql);//Serve para executar passando a conecxao e o insert 
	$linhas=mysqli_affected_rows($con);//serve para contar as linhas com o valor insert 
	echo "$linhas Registro Inserido";
	mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<title>Aula 30 Comandos Insert </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
	
</body>
</html>