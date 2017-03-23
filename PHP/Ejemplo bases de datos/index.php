<?php

require "connection.php";

$conn = new Connection();

$books = $conn->index();

include 'indexview.php';