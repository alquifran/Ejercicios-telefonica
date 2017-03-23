<?php
	$contador = 0;
	function isPrime($num){
		global $contador;
		if($num == 1 || $num%2 == 0){
			$contador++;
			return false;
		}
		elseif ($num == 2) {
			$contador = $contador + 2;
			return true;
		}
		else{
			$contador= $contador + 2;
			for ($i=3; $i <= sqrt($num); $i = $i + 2) { 
					$contador++;
					if(($num%$i) == 0){
						return false;
					}
				}
			return true;	
		}
	}

	function tellIfPrime($num){
		global $contador;
		if(isPrime($num)){
			echo "{$num} es primo, {$contador} comparaciones realizadas.<br>";
		}
		else{
			echo "{$num} no es primo, {$contador} comparaciones realizadas.<br>";
		}
		$contador = 0;
	}

	tellIfPrime(983);
	tellIfPrime(104729);
	tellIfPrime(985);
	tellIfPrime(104727);
	tellIfPrime(2147483647);
	tellIfPrime(2147483645);
	tellIfPrime(961775921);
	tellIfPrime(961775923);
?>