
<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<title>Aula 33 Comandos Select Parte 2 </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
	<table border="1px">
		<tr>
			<td>Codigo</td><td>Produtos</td><td>Preço</td><td>Quantidade</td><td>Categoria</td>
		</tr>
	<br/>
	<a href="form33.html">Voltar</a>
	<?php
	include "conec.inc";

	$vcat1=$_POST["F_Cad1"];
	$vcat2=$_POST["F_Cad2"];

	$sql="SELECT * FROM tb_produtos2 WHERE categoria = $vcat1 OR categoria = $vcat2";
	$res=mysqli_query($con,$sql);
	//mysqli_fetch_row() serve para trasforma o resultado inserido nele em um vetor
	//Sendo assim neste caso a variavel $reg de registro se tornou um vetor que foi percorrido pelas outras variaveis criadas
	//O mysqli_fetch_row estar controlando o while sendo: enquanto o mysqli_fetch_row() retornar linhas para a variavel $vreg o while continua no loop
	while($vreg=mysqli_fetch_row($res)){
		$vcod=$vreg[0];
		$vprod=$vreg[1];
		$vpreco=$vreg[2];
		$vqtde=$vreg[3];
		$vcat=$vreg[4];

		echo "<tr>";
		echo "<td> $vcod </td> <td> $vprod </td> <td> $vpreco </td> <td> $vqtde </td> <td> $vcat </td>";
		echo "</tr>";
		
	}
	mysqli_close($con);
	?>

</table>
</body>
</html>