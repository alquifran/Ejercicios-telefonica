<?php

require "connection.php";

$conn = new Connection();

$books = $conn->new($_GET['title'], $_GET['author'], $_GET['desc']);

include 'addview.php';