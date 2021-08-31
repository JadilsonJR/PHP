<?php

	include 'conec.inc';
	$res=mysqli_query($con,"SELECT * FROM tb_cadastro");//Serve para chamar todos os elementos da tabela NAO EXIBE	
	$linhas=mysqli_num_rows($res);//Esta chamando a quantidade de linhas de dados armazenado na tabela 
	echo "Encotrados $linhas registros na tabela Cadastro";//Mostra o resultado armazenado na variavel $res
	mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<title>Aula 29 Executando Comandos MySql </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
	
</body>
</html>