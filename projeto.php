<?php 
	$data = "12 de agosto de 2024";
	$sala = 850.00;
	$cargo = 'estágio';

	echo "projeto criado $data <br /><br />";

	printf("Salário minimo: R$ %.2f <br /><br />" , $sala);
	
	$texto = sprintf("%s recebe R$ %.2f por mês<br /><br />", $cargo, $sala );

	echo $texto;
?>