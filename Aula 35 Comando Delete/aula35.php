<?php
	include "conec.inc";
	$del="DELETE FROM tb_cadastro WHERE cod ='1' ";
	$res=mysqli_query($con,$del);
	$msg=mysqli_affected_rows($con);
	if($msg>0){
		echo "Deletado Com sucesso";
	}else
	{
		echo "Nenhum registro Foi deletado";
	}
	mysqli_close($con);
	?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<title>Aula 35 Comando de Deletar </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
</body>
</html>