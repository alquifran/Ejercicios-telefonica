<?php
	function eurosToDollar($algo){
		//entran valores tipo: 12,23€
		$valor = trim($algo);
		$valor = str_replace(' ', '', $valor);

		//$valor = substr($valor, -1, 4);
		$valor = str_replace('€', '', $valor);
		$valor = $valorEntr = round((str_replace(',','.', $valor)),2);
		$valor = $valor * 1.06175;

		printf("$%.2f", $valor);
	}

	function dollarToEuro($algo){
		$valor = trim($algo);
		$valor = str_replace(' ', '', $valor);
		$valor = str_replace('$', '', $valor);
		$valor = $valorEntr = round((str_replace(',','.', $valor)),2);
		$valor = $valor * 0.945313608;

		printf("$%.2f equivalen a %.2f€", $valorEntr, $valor);
	}

	eurosToDollar("1   2,  5    4  3  €   ");
	echo "<br>";
	dollarToEuro("    $     3   ,  5   4");
?>