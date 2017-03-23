<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar libro</title>
</head>
<body>
	<form action="postedit.php" method="GET" id="formBook">
		<table>
			<tr>
				<td><label for="title">Título: </label> </td>
				<td><textarea name="title" required="" id="title" form="formBook"
				><?= $title ?></textarea></td>
			</tr>
			<tr>
				<td><label for="author">Autor: </label> </td>
				<td><textarea name="author" required="" id="author" form="formBook"
				><?= $author ?></textarea></td>
			</tr>
			<tr>
				<td><label for="desc">Descripción: </label> </td>
				<td><textarea name="desc" required="" id="desc" form="formBook"
				><?= $desc ?></textarea></td>
			</tr>
			<input type="text" name="id" value=<?= $book[0]['id']?> hidden>
			<tr><td><input type="submit" name="submit"></td></tr>
		</table>
	</form>
	<a href="index.php"><button>Volver a la lista sin guardar cambios</button></a>
</body>
</html>