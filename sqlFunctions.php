<!-- sqlFunctions.php -->
<?php 

include 'database.php';
	

	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from users';
		$rows = $con->query($requete);
		return $rows;
	}

	function createUser($name, $firstname, $age, $adresse) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO users (name, firstname, age, adresse) 
					VALUES ('$name', '$firstname', '$age' ,'$adresse')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from users where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
		
	}

	function updateUser($id, $name, $firstname, $age, $adresse) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE users set 
						name= '$name',
						firstname = '$firstname',
						age = '$age',
						adresse = '$adresse' 
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	// echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// supprimer un user
	function deleteUser($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from users where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	// echo $sql . "<br>" . $e->getMessage();
	    }
	}

	function getNewUser() {
		$user['id'] = "";
		$user['name'] = "";
		$user['firstname'] = "";
		$user['age'] = "";
		$user['adresse'] = "";
		
	}
	


 ?>