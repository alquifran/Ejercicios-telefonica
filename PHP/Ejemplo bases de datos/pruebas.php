<?php

require "connection.php";

$conn = new Connection();

var_dump($conn->show(2) == null);

//$conn->new("adaaaa", "dddd", "akldsñfajñsdfljalñdsfjasñdf");
//si no hay resultados, devuelve null

$conn->edit('1', "ddd", "ddd", "dddddd");

//Como idea, se podría hacer una página que permita tanto editar como 
//añadir.