<?php
	function sorteo(...$players){
		$winner = rand(0, count($players) - 1);
		echo "El ente pensante que ha ganado es: {$players[$winner]} <br> <br>";
		$perd = "<br><ul>";
		foreach($players as $key => $player){
			if($key != $winner){
				$perd = $perd."<li>".$players[$key]."</li>";
			}
		}
		echo "Han perdido: {$perd} </ul>";
	}

	$winner = sorteo("Hola", "Pepe", "No es Pepe");
?>