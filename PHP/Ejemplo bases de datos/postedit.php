<?php

require "connection.php";

$conn = new Connection();

$book = $conn->edit($_GET['id'], $_GET['title'], $_GET['author'], $_GET['desc']);

header('Location: index.php');