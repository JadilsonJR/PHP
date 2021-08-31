<?php
	$vetor=array("Mouse","Teclado","Monitor","Memoria","Sair","Microfone","Impressora");
	//count conta o tamanho de um array 
	$tam=count($vetor);
	$i=0;
//LOOP WHILE
	echo "<hr/>";
	echo "Loop While";
	echo "<br/>";
	echo "<br/>";
	while($i<$tam){
		echo "Posiçao do Vetor $i:$vetor[$i]<br/>";
		$i++;
		if($vetor[$i] == "Sair"){
			break;
		}
	}
//LOOP DO WHILE 
	$i=0;
	echo "<hr/>";
	echo "Loop Do While";
	echo "<br/>";
	echo "<br/>";
	do{
		if($vetor[$i] == "Sair"){
			break;
		}
		echo "$vetor[$i]<br/>";
		$i++;
	}while($i<$tam);

//LOOP FOR
	echo "<hr/>";
	echo "Loop For";
	echo "<br/><br/>";
	for ($i=0;$i<$tam;$i++){
		echo "Posiçao do Vetor $i:$vetor[$i]<br/>";
		if($vetor[$i] == "Sair"){
			break;
		}
	}
	echo "<hr/>";
	echo "Loop Foreach";
	echo "<br/><br/>";
//LOOP FOREACH
	//Lista um array 
	foreach($vetor as $sair){
		if($sair == "Sair"){
			break;
		}
		echo "$sair<br/>";
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 11 Break</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>