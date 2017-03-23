<?php
class Connection{
	
	private $database = 'mysql:host=localhost;dbname=biblioteca;charset=utf8';
	//Esto tendría que leerlo de un archivo local
	private $user = 'root';
	private $password = 'root';
	private $conn;
	function __construct(){
		
		try{
			$this->conn = new PDO($this->database, $this->user, $this->password);
		}

		catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	function index(): array{
		$stmt = ($this->conn)->prepare('SELECT `id`, `titulo`, `autor` from `libros`');
		$stmt->execute();
		$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $books;
	}

	function show($id): array{
		$stmt = $this->conn->prepare('SELECT * from libros where `id` = :id' );
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		$book = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $book;
	}

	function new($name, $author, $description){
		$stmt = $this->conn->prepare('INSERT into libros (`titulo`, `autor`, `desc`)
			VALUES (:name, :author, :descr)');
		$stmt->bindValue(':name', $name);
		$stmt->bindValue(':author', $author);
		$stmt->bindValue(':descr', $description);
		$stmt->execute();
	}

	function edit($id, $name, $author, $description){
		$stmt = $this->conn->prepare('UPDATE `libros` 
			SET `titulo`= :name, `autor`=:author, `desc`=:descr
			WHERE `id`=:id');
		$stmt->bindValue(':name', $name);
		$stmt->bindValue(':author', $author);
		$stmt->bindValue(':descr', $description);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

	}

}