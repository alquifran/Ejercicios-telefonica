<?php

require "connection.php";

$conn = new Connection();

$book = $conn->show($_GET['edit']);

$title = htmlspecialchars($book[0]['titulo']);
$author = $book[0]['autor'];
$desc = $book[0]['desc'];

include 'editview.php';