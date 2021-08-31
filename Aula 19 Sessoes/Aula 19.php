<?php
//Sessao funciona para passar dados para outra pagina 
	//Passando Valores por sessoes
	session_start();
	//Inserindo dados no session
	$_SESSION['vnome']="Junior";
	$_SESSION['vtexto']="TESTE";

	$_SESSION['vlog']="n";




	//Excluindo os dados
	//unset($_SESSION['vnome']);

	//Mostrando os dados
	echo $_SESSION['vnome']."<br/>";
	echo $_SESSION['vtexto'];

	if (isset($_SESSION['vcanal'])) {
		echo "<br/>".$_SESSION['vcanal'];
	}else{
		echo "<br/>Variavel vcanal não foi definida";
	}

	//Destruir sessao
	//session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 19 Sessoes </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
	<br/>
	<a href="pag1.php" target="self">Segunda Pagina</a>
	<br/>
	<a href="pag2.php" target="self">Terceira Pagina</a>
</body>
</html>