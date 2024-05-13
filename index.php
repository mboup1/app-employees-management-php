<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="script.js"></script>
</head>
<body>
    <?php
        include 'sqlFunctions.php';
        include 'list-employees.php';
        include 'header.php';


        $users = getAllUsers();
        showTable($users);
    ?>

    <!-- <a href="addUserForm.php" class="btn btn-primary">Créer un utilisateur</a> -->
    
</body>
</html>
