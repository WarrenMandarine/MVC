<?php 
    $pageTitle = "Notre bibliothèque";
    require_once('./app/core/views/header.php'); 
?>

<h1>Les ouvrages de notre bibliothèque&nbsp;:</h1>

<table border=1>
        <thead>
            <th>Titre</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <?php $compteur = 0; ?>
            <?php foreach($results as $book){ ?>
                <tr>
                    <?php $compteur .= 1;?>
                    <td><?= $compteur; ?></td>
                    <td><?= $book["name"]; ?></td>
                    <td><?= $book["description"]; ?></td>
                    <td><?= $book["price"]; ?></td>
                    <td>
                        <form method="POST" action="index.php?controller=book&action=showUpdateForm">
                            <input type="hidden" value="<?= $book["id"]; ?>" name="updateID">
                            <input type="submit" value="📝">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="./delete.php">
                            <input type="hidden" value="<?= $book["id"]; ?>" name="deleteID">
                            <input type="submit" value="🗑️">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <p><a href="./add.php" title="Ajouter un livre à notre bibliotheque">Ajouter un livre</a></p>

<?php require_once('./app/core/views/footer.php'); ?>