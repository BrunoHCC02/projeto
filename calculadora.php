<?php
	
	$expre = 6;
	$num1 = 1050;
	$num2 = 102;
	
	echo "Escolha dois números<br/><br/>Você escolheu $num1 e $num2<br/><br/>";
	echo "Escolha uma expressão <br/><br/> 1-Soma<br/>2-Subtração<br/>3-Sultiplicação<br/>4-Sivisão<br/><br/>";
	echo "Você escolheu $expre<br/><br/>";

	function soma($num1,$num2){
		return($num1+$num2);
	}

	function sub($num1,$num2){
		return($num1-$num2);
	}

	function mult($num1,$num2){
		return($num1*$num2);
	}

	function div($num1,$num2){
		return($num1/$num2);
	}

	if ($expre==1) {
		echo "O Resultado é = ";
		echo soma($num1,$num2);
	}
	else if ($expre==2) {
		echo "O Resultado é = ";
		echo sub($num1,$num2);
	}
	else if ($expre==3) {
		echo "O Resultado é = ";
		echo mult($num1,$num2);
	}
	else if ($expre==4) {
		echo "O Resultado é = ";
		echo div($num1,$num2);
	}
	else{
		echo "$expre não é válido";
	}
?>