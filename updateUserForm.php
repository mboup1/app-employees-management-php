<!-- updateUserForm.php -->
<?php
include 'sqlFunctions.php';
include 'list-employees.php';
include 'header.php';


$id = $_GET["id"];
$user = readUser($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre à jour un utilisateur</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="row m-5">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
            <div class="bg-white shadow rounded p-4">
                <h1 class="display-6 text-dark text-center">Mettre à jour un utilisateur</h1>
                <hr class="bg-dark mb-5" />
                <form action="createUpdate.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>"/>
                    <input type="hidden" name="action" value="UPDATE"/>
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
                        <textarea id="adresse" class="form-control" name="adresse"><?php echo $user['adresse']; ?></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success mr-2" type="submit">Modifier</button>
                        <a href="index.php" class="btn btn-danger">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
