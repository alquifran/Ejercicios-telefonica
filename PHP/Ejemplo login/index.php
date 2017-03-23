<?php
session_start();
$userIsRegister = false;
function validateForm(){
	$errors = [];
	if(strlen(trim($_POST['username'])) < 6){
		$errors[] = 'El nombre de usuario debe
		tener, al menos, 6 caracteres.';
	}
	if(strlen(trim($_POST['password'])) < 6){
		$errors[] = 'La clave de usuario debe
		tener, al menos, 6 caracteres.';
	}
	return $errors;
}

function tryLogin($user, $password){
	$register_username = 'mi_nombre';
	$register_password =
	'$2y$10$M1HuXY0gis8CaMttkg/MiO1ZkWObk4vJQxmAbOn4rCU7RS.MhW1fK';
	if ($user === $register_username &&
		password_verify($password, $register_password)) {
		$_SESSION['username'] = $user;

	}
}

if (!empty($_POST)){
	$errors = validateForm();
	if(empty($errors)){
		$userIsRegister = tryLogin($_POST['username'], $_POST['password']);
	}
}
if (!empty($_SESSION['username'])){
	include 'welcome.php';
} else {
	if (!empty($_POST)){
		$errors[] = 'Nombre de usuario o clave
		incorrecta';
	}
	include 'form.php';
}