
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 13 Recebendo Formulario Html</title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior">
</head>
<body>
	<!-- Passagem de Dados de Formulario para o PHP method=""; pode ser POST ou GETH 
	O action é onde vc coloca o link da Pag do PHP
	 -->
	<form name="f_card" method="post" action="aula13php.php">
		<label>Nome:</label><br>
		<input type="text" name="f_nome" size="40" maxlength="30"/><br/><br/>
		<label>Senha:</label><br/>
		<input type="password" name="f_senha" size="40" maxlength="20"/><br/><br/>
		<input type="submit" name="Enviar">
		<input type="reset" name="Limpar">
</body>
</html>