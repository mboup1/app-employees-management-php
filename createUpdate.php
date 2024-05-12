<?php
	include 'sqlFunctions.php';
	include 'mesFunctionsTable.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$name = $_GET["name"];
		$firstname = $_GET["name"];
		$age = $_GET["age"];
		$adresse = $_GET["adresse"];
		
	}
	

	if ($action == "CREATE") {
		createUser($name, $firstname, $age, $adresse);

		echo "user cree <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateUser($id, $name, $firstname, $age, $adresse);
		echo "user update <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	

	
?>