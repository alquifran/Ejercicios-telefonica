<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Añadir un libro nuevo</title>
</head>
<body>
	<form action="add.php" method="GET" id="formBook">
		<table>
			<tr>
				<td><label for="title">Título: </label> </td>
				<td><input type="text" required="" name="title" id="title" value=""></td>
			</tr>
			<tr>
				<td><label for="author">Autor: </label> </td>
				<td><input type="text" required="" name="author" id="author" value=""></td>
			</tr>
			<tr>
				<td><label for="desc">Autor: </label> </td>
				<td><textarea name="desc" required="" id="desc" form="formBook"></textarea></td>
			</tr>
			<tr><td><input type="submit" name="submit"></td></tr>
		</table>
	</form>
	<a href="index.php"><button>Volver a la lista sin guardar cambios</button></a>
</body>
</html>