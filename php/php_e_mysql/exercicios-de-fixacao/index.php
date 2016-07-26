<?php 

/*Exercício 1.3 - Sintaxe Básica*/

echo "Exercício 1.3 - Sintaxe Básica<br>";

function somaValores($array){
	$soma = 0;
	for ($i=0; $i < sizeof($array); $i++) { 
		$soma = $soma + $array[$i];
	}

	return $soma;
}

//$meuArray = array(5,5,10);
$meuArray = [5,5,10,13.5,56];
echo "A soma é igual a " .  somaValores($meuArray);


echo "<br>-----------------------------------------<br><br>";



$total = 10 + 20 / 4;
echo $total;



?>