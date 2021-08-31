<?php
	$data = date("d");//A data em Numero
	$mes = date("m");//Passa o Mes
	$ano = date("Y");//Passa o Ano se for y passa os dois ultimos numeros e se for Y passa completo
	$Meses=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
	$hora=date("H");//Horas se h formato de 12 hrs e se H formato de 24 Hrs
	$minutos=date("i");//Para minutos
	$segundos=date("s");

	echo $data." de ".$Meses[$mes-1]." de ".$ano;
	echo "<br/>".$hora.":".$minutos.":".$segundos;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 15 Manipulaçao de Data e Hora</title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>