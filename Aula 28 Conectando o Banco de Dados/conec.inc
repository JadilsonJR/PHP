<?php

	$con=mysqli_connect("localhost","root","");//Esta conectando ao banco de dados os parametros são local de armazenamento , username, e senha do phpMySql
	mysqli_select_db($con,"tb_cadastro");//serve para chamar a tabela de dados criado no sqlserver os parametro da chamada sao, a conecçao do phpMysql que foi salva em uma variavel e o nome da tabela criada.
?>
