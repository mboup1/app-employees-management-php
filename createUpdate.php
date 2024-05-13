<!-- createUpdate.php -->

<?php
	session_start();

	include 'sqlFunctions.php';
	include 'list-employees.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$name = $_GET["name"];
		$firstname = $_GET["firstname"];
		$age = $_GET["age"];
		$adresse = $_GET["adresse"];
		
	}


if ($action == "CREATE") {
	createUser($name, $firstname, $age, $adresse);

	$_SESSION['message'] = "L'employé " . $_GET["firstname"] ." ".  $_GET["name"] . " a été ajouté avec succès!";

	header("Location: index.php");
	exit(); 
}


if ($action == "UPDATE") {
	updateUser($id, $name, $firstname, $age, $adresse);
	header("Location: index.php");
	exit();
}
	
	if ($action == "DELETE") {
		deleteUser($id);
		header("Location: index.php");
		exit();
	}	
?>