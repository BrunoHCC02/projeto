<?php 
	echo "<hr/>";
	$aprovados = 0;
	$exame = 0;
	$reprovados = 0;

	$medsala = 0;

	$nota1a = 10;
	$nota2a = 9;
	$meda1 = 0;

	$nota1b = 5;
	$nota2b = 4;
	$meda2 = 0;

	$nota1c = 6;
	$nota2c = 5;
	$meda3 = 0;

	$nota1d = 5;
	$nota2d = 2;
	$meda4 = 0;

	$nota1e = 10;
	$nota2e = 10;
	$meda5 = 0;

	$nota1f = 9;
	$nota2f = 7;
	$meda6 = 0;
	
	$meda1 = ($nota1a+$nota2a)/2;
	$meda2 = ($nota1b+$nota2b)/2;
	$meda3 = ($nota1c+$nota2c)/2;
	$meda4 = ($nota1d+$nota2d)/2;
	$meda5 = ($nota1e+$nota2e)/2;
	$meda6 = ($nota1f+$nota2f)/2;

	//media aluno1

	if ($meda1<=3) {
			echo "Aluno 1 reprovado<br/><br/>";
	}
	else if($meda1>=3.1 && $meda1<=7) {
			echo "Aluno 1 para o exame<br/><br/>";
	}
	else {
			echo "Aluno 1 aprovado<br/><br/>";
			$aprovados++;
	}

	//media aluno2

	if ($meda2<=3) {
			echo "Aluno 2 reprovado<br/><br/>";
			$reprovados++;
	}
	else if($meda2>=3.1 && $meda2<=7) {
			echo "Aluno 2 para o exame<br/><br/>";
			$exame++;
	}
	else {
			echo "Aluno 2 aprovado<br/><br/>";
			$aprovados++;

	}

	//media aluno3

	if ($meda3<=3) {
			echo "Aluno 3 reprovado<br/><br/>";
			$reprovados++;
	}
	else if($meda3>=3.1 && $meda3<=7) {
			echo "Aluno 3 para o exame<br/><br/>";
			$exame++;
	}
	else {
			echo "Aluno 3 aprovado<br/><br/>";
			$aprovados++;
	}

	//media aluno4


	if ($meda4<=3) {
			echo "Aluno 4 reprovado<br/><br/>";
			$reprovados++;
	}
	else if($meda4>=3.1 && $meda4<=7) {
			echo "Aluno 4 para o exame<br/><br/>";
			$exame++;
	}
	else {
			echo "Aluno 4 aprovado<br/><br/>";
	$aprovados++;
	}

	//media aluno5

	
	if ($meda5<=3) {
			echo "Aluno 5 reprovado<br/><br/>";
			$reprovados++;
	}
	else if($meda5>=3.1 && $meda5<=7) {
			echo "Aluno 5 para o exame<br/><br/>";
			$exame++;
	}
	else {
			echo "Aluno 5 aprovado<br/><br/>";
			$aprovados++;
	}

	//media aluno6

	
	if ($meda6<=3) {
			echo "Aluno 6 reprovado<br/><br/>";
			$reprovados++;
	}
	else if($meda6>=3.1 && $meda6<=7) {
			echo "Aluno 6 para o exame<br/><br/>";
			$exame++;
	}
	else {
			echo "Aluno 6 aprovado<br/><br/>";
			$aprovados++;
	}

	echo "<hr/>";

	echo "$aprovados Alunos aprovados<br/><br/>";
	echo "$reprovados Alunos reprovados<br/><br/>";
	echo "$exame Alunos para o exame<br/><br/>";

	echo "<hr/>";

	$medsala = ($meda1+$meda2+$meda3+$meda4+$meda5+$meda6)/6;
	echo "media da sala é $medsala<br/><br/>";
?>
