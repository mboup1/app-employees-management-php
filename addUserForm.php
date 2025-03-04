<!-- addUserForm.php -->
<?php
include 'sqlFunctions.php';
include 'list-employees.php';
include 'header.php';

$user = getNewUser();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="row m-5">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
            <div class="bg-white shadow rounded p-4">
                <h1 class="display-6 text-dark text-center">Ajouter un utilisateur</h1>
                <hr class="bg-dark mb-5" />
                <form action="createUpdate.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>"/>
                    <input type="hidden" name="action" value="CREATE"/>
                    <div class="form-group mb-3">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" class="form-control" name="name" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="firstname">Prénom :</label>
                        <input type="text" id="firstname" class="form-control" name="firstname">
                    </div>
                    <div class="form-group mb-3">
                        <label for="age">Age :</label>
                        <input type="text" id="age" class="form-control" name="age" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="adresse">Adresse :</label>
                        <textarea id="adresse" class="form-control" name="adresse"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success mr-2" type="submit">Ajouter</button>
                        <div>
                            <a href="index.php" class="btn btn-danger">Retour</a>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

</body>
</html>
