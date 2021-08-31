<?php
	include "conec.inc";
	$vcat=$_POST["F_Cad"];
	$sql="SELECT * FROM tb_produtos2 WHERE categoria = $vcat";
	$res=mysqli_query($con, $sql);
	$lin=mysqli_num_rows($res);
	echo "$lin registros encontrados";
	mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<title>Aula 32 Comandos Select Parte 1 </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
	<br/>
	<a href="form.html">Voltar</a>
</body>
</html>