<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$biblioteca = [
		"cine" => [
			"El guión",
			"Hitchcock"
		],
		"programacion" => [
			"Patterns",
			"Clean Code",
			"Refactoring"
		],
		"libros"=>[
		],
	];
	
	
	
	echo "<ul>";
	foreach ($biblioteca as $category => $contenido) {
		echo "<li>$category</li>";
		echo "<ul>";
		foreach ($contenido as $content) {
			echo "<li>$content</li>";
		}
		echo "</ul>";
	}
	echo "</ul>"
	?>
</body>
</html>


