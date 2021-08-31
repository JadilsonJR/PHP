
<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<title>Aula 34 Comandos LIKE </title>
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

	$vpes="m";
	//O comando Like serve para fazer pesquisas
	//o like tem dois parametro o _ e %
	//%  serve para dizer que depois do informado pode ser qualquer caractere ex: B% vai vim qualquer um q tem B no primeiro lugar
	//_Serve  para marca um lugar ex: _B vai vim quaquer palavra que na 2 posiçao tenha o B
	$sql="SELECT * FROM tb_produtos2 WHERE Produto LIKE '$vpes%' ";
	$res=mysqli_query($con,$sql);
	
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