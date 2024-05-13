<!-- mesFunctionsTable.php -->

<?php

function showTable($users)
{
    ?>

        <div class="bg-white shadow p-4 rounded container">
            <h1 class="display-6 text-dark text-center">Liste des utilisateurs</h1>
            <hr class="bg-dark text-dark">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Age</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['name']; ?></td>
                                <td><?php echo $user['firstname']; ?></td>
                                <td><?php echo $user['age']; ?></td>
                                <td><?php echo $user['adresse']; ?></td>
                                <td>
                                    <a href="updateUserForm.php?id=<?php echo $user['id']; ?>" class="btn btn-primary me-2">Modifier</a>

                                    <a href="createUpdate.php?action=DELETE&id=<?php echo $user['id']; ?>" 
                                        class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer <?php echo $user['name']; ?> ?')">
                                        Supprimer
                                    </a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php

}

?>
