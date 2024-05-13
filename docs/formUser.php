<?php
include 'sqlFunctions.php';
include 'list-employees.php';

$id = $_GET["id"];
if ($id == 0) {
	$user = getNewUser();
	$action = "CREATE";
	$libelle = "Ajouter";
} else {
	// Retrieve user data with SELECT * from users where id = '$id'
	$user = readUser($id);

	$action = "UPDATE";
	$libelle = "Mettre a jour";
}
?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>
<body>
	<a href="index.php">Liste des utilisateurs</a>

	<div class="row m-5">
		<div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
			<div class="bg-white shadow rounded p-4">
				<h1 class="display-6 text-dark text-center"><?php echo $libelle; ?> un utilisateur</h1>
				<hr class="bg-dark mb-5" />
				<form action="createUpdate.php" method="get">
					<input type="hidden" name="id" value="<?php echo $user['id']; ?>"/>
					<input type="hidden" name="action" value="<?php echo $action; ?>"/>
					<div class="form-group mb-3">
						<label for="name">Nom :</label>
						<input type="text" id="name" class="form-control" name="name" value="<?php echo $user['name']; ?>">
					</div>
					<div class="form-group mb-3">
						<label for="firstname">Prénom :</label>
						<input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $user['firstname']; ?>">
					</div>
					<div class="form-group mb-3">
						<label for="age">Age :</label>
						<input type="text" id="age" class="form-control" name="age" value="<?php echo $user['age']; ?>">
					</div>
					<div class="form-group mb-3">
						<label for="adresse">Adresse :</label>
						<textarea id="adresse" class="form-control" name="adresse" placeholder="<?php echo $user['adresse']; ?>"></textarea>
					</div>
					<div class="d-flex">
						<button class="btn btn-success mx-auto" type="submit"><?php echo $libelle; ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php if ($action != "CREATE") { ?>
		<div class="row m-5">
			<div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
				<form action="createUpdate.php" method="get">
					<input type="hidden" name="action" value="DELETE"/>
					<input type="hidden" name="id" value="<?php echo $user['id']; ?>"/>
					<div class="form-group mb-3">
						<button class="btn btn-danger mx-auto" type="submit">Supprimer</button>
					</div>
				</form>
			</div>
		</div>
	<?php } ?>

</body>
</html>
