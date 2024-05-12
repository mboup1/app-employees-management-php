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
        include 'mesFunctionsTable.php';

        $users = getAllUsers();
        showTable($users);
    ?>

    <a href="formUser.php?id=0" class="btn btn-primary">Créer un utilisateur</a>
    
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
