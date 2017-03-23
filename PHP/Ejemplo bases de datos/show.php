<?php

require "connection.php";

$conn = new Connection();

$book = $conn->show($_GET['show']);

include 'showview.php';