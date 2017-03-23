<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prueba formulario</title>
</head>
<body>
	<?="Bienvenido ".$_SESSION['username']."<br>";?>
	<button onclick="window.location.href='logout.php'">Cerrar sesión</button>
</body>
</html>