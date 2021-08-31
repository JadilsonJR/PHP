<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 26 Enviando Um Email </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
		<form name="email" method="post" action="envia.php">
			<label>E-mail</label><br/>
			<input type="text" name="email_txt"/><br/>
			<label>Assunto</label><br/>
			<input type="text" name="assunto_txt"/><br/>
			<label>Mensagem</label><br/>
			<textarea name="msg_txt" rows="5" cols="50"></textarea><br/>
			<input type="submit" value="Enviar">
		</form>
</body>
</html>