<?php 
	$va = 5;	
	echo "Qual sua fruta favoria?<br />1- Banana<br />2- Laranja<br />3- Uva<br />4- Maçã<br />5- Abacaxi<br />6- Sair<br /><br />";

	if ($va>=7) {
			echo "Seu número não é válido.";
	}
	else {
	switch ($va) {
		case '1':
			echo "Sua fruta favoria é banana";
			break;
		case '2':
			echo "Sua fruta favoria é laranja";
			break;
		case '3':
			echo "Sua fruta favoria é uva";
			break;
		case '4':
			echo "Sua fruta favoria é maçã";
			break;
		case '5':
			echo "Sua fruta favoria é abacaxi";
			break;
		case '6':
			echo "Você saiu";
			break;
		
		default:
			echo "Você não escolheu nada";
			break;
		}
	}
?>