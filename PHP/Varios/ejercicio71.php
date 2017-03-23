<?php

if(empty($_COOKIE['contador'])){
	$caducidad = time() +5;
	setcookie('contador', 1, $caducidad);
	setcookie('caducidad', $caducidad);
}
else{
	setcookie('contador', $_COOKIE['contador'] + 1, $_COOKIE['caducidad']);
}

	echo "Número de visitas: ".($_COOKIE['contador'] ?? 0);
	

	?>