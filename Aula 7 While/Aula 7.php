<?php
	$i=0;
	$tam=5;
	$vetor=array($tam);
	while($i<$tam){
		echo "Valor da Variavel i: $i <br/>";
		$i++;
	}

	echo "<br/><hr/><br/>";

	$i=0;
	while ($i<$tam){
		$vetor[$i]=$i;
		$i++;
	}
	$i=0;
	while ($i<$tam) {
		echo $vetor[$i]."<br/>";
		$i++;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aula 7 While</title>
	<meta charset="utf-8">
</head>
<body>
	<p> JUNIOR CRUZ </p>
</body>
</html>