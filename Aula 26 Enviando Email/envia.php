<?php
	$vmail=$_POST['email_txt'];
	$vassunto=$_POST['assunto_txt'];
	$vmsg=$_POST['msg_txt'];

//Aulguns Cabeçalhos diferentes Cc\Bcc\Comments\Content-Type:text/html/From/Date

	if (mail($vmail,$vassunto,$vmsg,"Reply-To:resp_junior@gmail.com")){
		echo "Mensagem Enviada Com Sucesso<br/>";
		echo "<a href=Aula26.php  target=_self>Voltar</a>";
	}else{
		echo "Erro ao Enviar, tente novamente";
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 26 Enviando Um Email </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
	
</body>
</html>