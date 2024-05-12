<!-- database.php -->

<?php

function getDatabaseConnexion() {
    try {
        $user = "root";
        $pass = "";
        $pdo = new PDO('mysql:host=localhost;dbname=employees-php', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        print "Database connection error : " . $e->getMessage() . "<br/>";
        die();
    }
}

?>
