<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php

        session_start();

        include 'sqlFunctions.php';
        include 'list-employees.php';
        include 'header.php';

        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '</div>';

            unset($_SESSION['message']);
        header("refresh:3;url=index.php");

    }


        $users = getAllUsers();
        showTable($users);
    ?>
    
</body>
</html>
