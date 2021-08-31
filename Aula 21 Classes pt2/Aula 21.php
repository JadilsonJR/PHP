<?php
//Herança é uma classe que herda propriedade e metodos de outra classe

//PROTECTED: permite o acesso de classes herdeiras mas nao externamente

//PRIVATE: restringe para todos os herdeiros ou qualquer outro externo que chamar a propriedade.Pode aplicar para propriedade e metodos.

//PUBLIC:classe é publica 
 
	class aula{
		protected $var1="Bom dia.";
		protected $var2="Canal Fessor Bruno";
		protected $var3="Youtube";

		 function escreve(){
			echo "<br/>".$this->var1;
			echo "<br/>".$this->var2;
			echo "<br/>".$this->var3;
		}
	}

	//Herança é uma classe que herda propriedade e metodos de outra classe
	class canal extends aula{
		//Propreidades Propria da Classe Canal 
		var $vc1="Curso de PHP";
		var $vc2="Junior";
		//Metodo Proprio da Classe Canal
		function escreve2(){
			echo "<br/>".$this->vc1;
			echo "<br/>".$this->vc2;
			echo "<hr/>";
			echo "<br/>".$this->var1;
			echo "<br/>".$this->var2;
			echo "<br/>".$this->var3;
		}
	}

	$aulaobj=new aula();
	$aulaobj->escreve();

	$canalobj=new canal();
	echo "<hr/>";
	$canalobj->escreve();
	$canalobj->escreve2();
	echo "<hr/>";
	//echo "<br/>".$this->var1;
?>

<!DOCTYPE html>
<html lang="pt-br"> 
<head>
	<title>Aula 21 Classes Pt2 </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>
