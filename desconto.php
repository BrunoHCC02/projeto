<?php 
	echo "Qual seu salário atual? (EX: 1111.11)<br/><br/>";
	$sal = 1803;
	$media = 0;
	$desc = 0;

	if ($sal<=1500) {
			$media = $sal * 0.90;
			$desc = $sal * 0.10;
			echo "Seu Sálario bruto é R$ $sal<br/>";
			echo "Seu Desconto é de R$ $desc<br/>";
			echo "Seu Sálario líquido é R$ $media<br/>";
	}
	else if($sal>=1501 && $sal<=1600) {
			$media = $sal * 0.85;
			$desc = $sal * 0.15;
			echo "Seu Sálario bruto é R$ $sal<br/>";
			echo "Seu Desconto é de R$ $desc<br/>";
			echo "Seu Sálario líquido é R$ $media<br/>";
	}
	else if($sal>=1601 && $sal<=1800) {
			$media = $sal * 0.80;
			$desc = $sal * 0.20;
			echo "Seu Sálario bruto é R$ $sal<br/>";
			echo "Seu Desconto é de R$ $desc<br/>";
			echo "Seu Sálario líquido é R$ $media<br/>";
	}else if($sal>=1801 && $sal<=2500) {
			$media = $sal * 0.725;
			$desc = $sal * 0.275;
			echo "Seu Sálario bruto é R$ $sal<br/>";
			echo "Seu Desconto é de R$ $desc<br/>";
			echo "Seu Sálario líquido é R$ $media<br/>";
	}
?>