<?php
//Array
 $vetor=array(5);//Pode Criar um Array Assim
 $vetor[0]="Carro";
 $vetor[1]="Aviao";
 $vetor[2]="Navio";
 $vetor[3]="Moto";
 $vetor[4]="Onibus";
 echo $vetor[4]."<br/>";

 $vetor2=array("Nome"=>"Junior","Cidade"=>"Brasilia","Curso"=>"PHP");//Ou Assim declarando e Atribuindo um Valor
 echo "Nome:".$vetor2["Nome"]."</br>";
 echo "Cidade:".$vetor2["Cidade"]."</br>";
 echo "Curso:".$vetor2["Curso"]."</br>";

//Matriz Ou Array Bimendicional

$matriz=array(
	array("Carro1: ",65000),
	array("Carro2: ",35000),
	array("Carro3: ",50000)
);

	echo "Carro A :".$matriz[0][0]."Valor: ".$matriz[0][1]."<br/>";

	echo "Carro B :".$matriz[1][0]."Valor: ".$matriz[1][1]."<br/>";

	echo "Carro C :".$matriz[2][0]."Valor: ".$matriz[2][1]."<br/>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aula 4 Array</title>
	<meta charset="utf-8">
</head>
<body>
	<p> JUNIOR CRUZ </p>
</body>
</html>